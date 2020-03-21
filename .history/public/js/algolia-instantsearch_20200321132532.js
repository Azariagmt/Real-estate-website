(function() {
    const search = instantsearch({
        appId: 'NI2IZ7VM3G',
        apiKey: 'b57b31812f3b10d8b142212e95229812',
        indexName: 'properties',
        urlSync: true
    });

    search.addWidget(
        instantsearch.widgets.hits({
            container: '#hits',
            templates: {
                empty: 'No results',
                item: function(item) {
                    return `
                    <a href="${window.location.origin}/properties/${item.slug}">
                    <div class="instantsearch-result">
                        <div>
                            <img src="${window.location.origin}/storage/${item.image}" alt="img" class="algolia-thumb-result" width="200px">
                        </div>
                        <div>
                            <div class="result-title">
                                ${item._highlightResult.description.value}
                            </div>
                            <div class="result-details">
                                ${item._highlightResult.details.value}
                            </div>
                            <div class="result-price">
                                ${(item.price).toFixed(2)} ETB
                            </div>
                        </div>
                    </div>
                </a>
                        <hr>
                    `;
                }
            }
        })
    );

    // initialize SearchBox
    search.addWidget(
        instantsearch.widgets.searchBox({
            container: '#search-box',
            placeholder: 'Search for properties'
        })
    );

    // initialize pagination
    search.addWidget(
        instantsearch.widgets.pagination({
            container: '#pagination',
            maxPages: 20,
            // default is to scroll to 'body', here we disable this behavior
            scrollTo: false
        })
    );

    search.addWidget(
        instantsearch.widgets.stats({
            container: '#stats-container'
        })
    );

    // initialize RefinementList
    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#refinement-list-one',
            attributeName: 'locations',
            sortBy: ['name:asc']
        })
    );

    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#refinement-list-two',
            attributeName: 'locations',
            sortBy: ['name:asc']
        })
    );

    search.addWidget(
        instantsearch.widgets.refinementList({
            container: '#refinement-list-three',
            attributeName: 'locations',
            sortBy: ['name:asc']
        })
    );

    search.start();
})();