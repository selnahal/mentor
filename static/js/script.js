(function (){

    var gridster;
    // Angular App Managing SVN Data Table
    var svnApp = angular.module('svnApp', ['angularUtils.directives.dirPagination'])
        .controller('svnController', function($scope) {
            $scope.sortType     = 'id';
            $scope.sortReverse  = false;
            $scope.searchCommit   = '';
            $scope.config = {
                itemsPerPage: 5,
                fillLastPage: true
              };
            $scope.commitList = [];
            $scope.url = $('#url').val() + 'retrieveSVNData';
            $.ajax({
                url: $scope.url,
                type: 'post',
                data: {},
                async: false,
                success: function (response) {
                    $scope.commitList = JSON.parse(response);
                    
                }
            });
            $scope.sort = function(keyname){
                $scope.sortType = keyname;
                $scope.sortReverse = !$scope.sortReverse;
            }
        });

    // Angular App Managing Jira Data Table
    var jiraApp = angular.module('jiraApp', ['angularUtils.directives.dirPagination'])
        .controller('jiraController', function($scope) {
            $scope.sortType     = 'id';
            $scope.sortReverse  = false;
            $scope.searchCommit   = '';
            $scope.config = {
                itemsPerPage: 5,
                fillLastPage: true
              };
            $scope.issuesList = [];
            $scope.url = $('#url').val() + 'retrieveJiraData';
            $.ajax({
                url: $scope.url,
                type: 'post',
                data: {},
                async: false,
                success: function (response) {
                    $scope.issuesList = JSON.parse(response);
                }
            });
            $scope.sort = function(keyname){
                $scope.sortType = keyname;
                $scope.sortReverse = !$scope.sortReverse;
            }
        });

    // Angular App for Issue Types in Jira
    var jiraIssueTypeApp = angular.module('jiraIssueTypeApp', ['nvd3ChartDirectives'])
        .controller('jiraIssueTypeController', function($scope){
            var colorArray = ['#353942', '#29c7ca', '#9a9898'];
            $scope.data = [
                {
                    key: "Improvement",
                    y: 5
                },
                {
                    key: "Task",
                    y: 2
                },
                {
                    key: "Bug",
                    y: 10
                }
            ];
            $scope.colorFunction = function() {
                return function(d, i) {
                    return colorArray[i];
                };
            }
            $scope.width = 500;
            $scope.height = 300;
            $scope.xFunction = function() {
                return function(d) {
                    return d.key;
                };
            }
            $scope.yFunction = function() {
                return function(d) {
                    return d.y;
                };
            }
            $scope.descriptionFunction = function() {
                return function(d) {
                    return d.key;
                }
            }
            $scope.toolTipContentFunction = function(){
                return function(key, x, y, e, graph) {
                    return '<h3>' + key + '</h3>' +
                        '<p>' +  Math.ceil(y.value) + '</p>'
                }
            }
        });

    // Angular App for SVN File Extention
    var svnFileExtensionApp = angular.module('svnFileExtensionApp', ['nvd3ChartDirectives'])
        .controller('svnFileExtensionController', function($scope){
            var colorArray = ['#29C7CA', '#29B8BB', '#2AA9AC', '#2B9A9D', '#2C8B8E', '#2D7C7F', '#2D6D70', '#2E5E61', '#2F4F52', '#304043', '#313235'];
            $scope.data = [
                {
                    key: ".svh",
                    y: 20
                },
                {
                    key: ".ext",
                    y: 20
                },
                {
                    key: ".sv",
                    y: 30
                },
                {
                    key: ".xml",
                    y: 40
                },
                {
                    key: ".java",
                    y: 50
                },
                {
                    key: ".js",
                    y: 60
                },
                {
                    key: ".php",
                    y: 70
                },
                {
                    key: ".css",
                    y: 80
                },
                {
                    key: ".html",
                    y: 90
                },
                {
                    key: ".svg",
                    y: 100
                },
                {
                    key: ".xsd",
                    y: 110
                }
            ];
            $scope.colorFunction = function() {
                return function(d, i) {
                    return colorArray[i];
                };
            }
            $scope.width = 500;
            $scope.height = 300;
            $scope.xFunction = function() {
                return function(d) {
                    return d.key;
                };
            }
            $scope.yFunction = function() {
                return function(d) {
                    return d.y;
                };
            }
            $scope.descriptionFunction = function() {
                return function(d) {
                    return d.key;
                }
            }
            $scope.toolTipContentFunction = function(){
                return function(key, x, y, e, graph) {
                    return '<h3>' + key + '</h3>' +
                        '<p>' +  Math.ceil(y.value) + '</p>'
                }
            }
        });

    // Angular App for Jira Users' Issues
    var jiraUsersIssueApp = angular.module('jiraUsersIssueApp', ['nvd3ChartDirectives'])
        .controller('jiraUsersIssueController', function($scope){
            var colorArray = ['#353942', '#29c7ca', '#9a9898'];
            $scope.data = [
                {
                    key: "Ayman",
                    values: [['Task', 5], ['Improvement', 10], ['Bug', 20]]
                },
                {
                    key: "Menna",
                    values: [['Task', 2], ['Improvement', 20], ['Bug', 30]]
                },
                {
                    key: "Ramy",
                    values: [['Task', 15], ['Improvement', 20], ['Bug', 23]]
                }
            ];
            $scope.width = 500;
            $scope.height = 300;
            $scope.toolTipContentFunction = function(){
                return function(key, x, y, e, graph) {
                    return '<h3>' + key + '</h3>' +
                        '<p>' +  Math.ceil(y) + '</p>'
                }
            }
            $scope.colorFunction = function() {
                return function(d, i) {
                    return colorArray[i];
                };
            }
        });

    // Angular App for Top Compitters
    var topCommittersApp = angular.module('topCommittersApp', ['nvd3ChartDirectives'])
        .controller('topCommittersController', function($scope){
            $scope.data = [
                {
                    "key": "Ayman",
                    "color": "#29C7CA",
                    "values": [
                        ["Commits" , 300 ]
                    ]
                },
                {
                    "key": "Osama",
                    "color": "#29B8BB",
                    "values": [
                        ["Commits" , 50]
                    ]
                },
                {
                    "key": "Sara",
                    "color": "#2AA9AC",
                    "values": [
                        ["Commits" , 100]
                    ]
                },
                {
                    "key": "Menna",
                    "color": "#2B9A9D",
                    "values": [
                        ["Commits" , 200]
                    ]
                },
                {
                    "key": "Ramy",
                    "color": "#2C8B8E",
                    "values": [
                        ["Commits" , 500]
                    ]
                }
            ];
            $scope.width = 500;
            $scope.height = 300;
            $scope.toolTipContentFunction = function(){
                return function(key, x, y, e, graph) {
                    return '<h3>' + key + '</h3>' +
                        '<p>' +  Math.ceil(y) + '</p>'
                }
            }
            var format = d3.format('');
            $scope.valueFormatFunction = function(){
                return function(d){
                    return format(d);
                }
            }
        });
        
    angular.bootstrap($('#svn_file_extension'), ['svnFileExtensionApp']);
    angular.bootstrap($('#top_committers'), ['topCommittersApp']);
    angular.bootstrap($('#jira_users_issue'), ['jiraUsersIssueApp']);

})();


$( document ).ready(function() { 
    var navh = $("body").height();
    var h = window.innerHeight;
    $("#div_menu").height(navh);

    $('.btn_delete').click(function(event) {
        $(this).closest('.gadget_container').remove();
    });

    $('.btn_settings').click(function (event) {
        $('#edit_widget_modal').modal('toggle');
        var id = $(this).closest('.gadget_container').attr('id');
        $('#edited_panel').val(id);
        // alert($('#edited_panel').val());
    });

    $('#modal_update_btn').click(function(event) {
        // alert('hi');
        var id = $('#edited_panel').val();
        var newText = $('#widget_name').val();
        $('#'+id).find('.gadget_header label').text(newText);
        alert($('#'+id).find('.gadget_header label').text());
        // alert(newText);
        $('#edit_widget_modal').modal('toggle');
    });
});











