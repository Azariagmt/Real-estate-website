(function() {
    var client = algoliasearch('NI2IZ7VM3G', 'b57b31812f3b10d8b142212e95229812');
    var index = client.initIndex('properties');
    var enterPressed = false;
    //initialize autocomplete on search input (ID selector must match)
    autocomplete('#aa-search-input',
        { hint: false }, {
            source: autocomplete.sources.hits(index, { hitsPerPage: 10 }),
            //value to be displayed in input control after user's suggestion selection
            displayKey: 'name',
            //hash of templates used when rendering dataset
            templates: {
                //'suggestion' templating function used to render a single suggestion
                suggestion: function (suggestion) {
                    const markup = `
                        <div class="algolia-result">
                            <span>
                                <img src="${window.location.origin}/storage/${suggestion.image}" width="60px" alt="img" class="algolia-thumb">
                            </span>
                            <span>${(suggestion.price)} ETB</span>
                        </div>
                        <div class="algolia-details">
                        <span><img src="img/rooms/bed.png" alt=""> </span>
                        <img src="img/rooms/bath.png" alt="">
                            <span>${suggestion._highlightResult.bedrooms.value}</span>
                            <span>${suggestion._highlightResult.bathrooms.value} </span>
                        </div>
                    `;

                    return markup;
                },
                empty: function (result) {
                    return 'Sorry, we did not find any results for "' + result.query + '"';
                }
            }
        }).on('autocomplete:selected', function (event, suggestion, dataset) {
            window.location.href = window.location.origin + '/shop/' + suggestion.slug;
            enterPressed = true;
        }).on('keyup', function(event) {
            if (event.keyCode == 13 && !enterPressed) {
                window.location.href = window.location.origin + '/search-algolia?q=' + document.getElementById('aa-search-input').value;
            }
        });
})();
