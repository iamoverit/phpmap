<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <input class="form-control" type="text" id="search-box"/>
                <small class="pull-right">Powered by
                <a target="_blank" href="https://www.algolia.com/?utm_source=phpmap&utm_medium=link&utm_campaign=phpmap_search">
                    <img width="50" src="https://www.algolia.com/assets/algolia128x40.png">
                </a>
                </small>
            </div>

            <br><br><br>
            <div id="hits-container"></div>

            <div class="col-md-12">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <div id="pagination"></div>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            this.createSearch();
        },

        methods: {
            createSearch() {
                var search = instantsearch({
                    appId: '9JUTOYSC0P',
                    apiKey: '1a8a0bdc9bf17ec7fea1046d16055136',
                    indexName: 'usergroups',
                    urlSync: true
                });

                search.addWidget(
                    instantsearch.widgets.searchBox({
                        container: '#search-box',
                        placeholder: 'Search for names or countries...'
                    })
                );

                var itemTemplate = '<div class="col-md-3">' +
                    '<div class="thumbnail">' +
                    '<img src="https://maps.googleapis.com/maps/api/staticmap?maptype=roadmap&center={{ latitude }},{{ longitude }}&zoom=13&size=400x200&key=AIzaSyDlDS7KYdMMQd_CynknFWTxhZwUwMhnZAg" alt="{{ shortname }}" class="img img-responsive">' +
                    '<div class="caption">' +
                    '<h4 class="text-center">{{ name }}</h4>' +
                    '<p class="text-center">{{ country }}</p>' +
                    '<a  href="/ug/{{ slug }}" class="btn btn-default btn-xs btn-block" role="button">View Group</a>' +
                    '</div>' +
                    '</div>' +
                    '</div>';

                search.addWidget(
                    instantsearch.widgets.hits({
                        container: '#hits-container',
                        templates: {
                            empty: '<div class="panel panel-default text-center">'+
                            '<div class="panel-body">'+
                            '<h4>No results</h4>'+
                            '</div>'+
                            '</div>',
                            item: itemTemplate
                        },
                        hitsPerPage: 16
                    })
                );

                search.addWidget(
                    instantsearch.widgets.pagination({
                        container: '#pagination',
                        cssClasses: {
                            root: 'pagination',
                            active: 'active'
                        }
                    })
                );

                search.start();
            }
        }
    }
</script>