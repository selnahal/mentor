(function (){

    // Angular App Managing SVN Data Table
    var app = angular.module('svnApp', ['angularUtils.directives.dirPagination'])
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
        
    // angular.bootstrap($('#jira_table'), ['jiraApp']);
    angular.bootstrap($('#jira_users_issue'), ['jiraUsersIssueApp']);
})();


$( document ).ready(function() { 
    var navh = $("body").height();
    var h = window.innerHeight;
    // if (navh > h){
        // alert(h);
        $("#div_menu").height(navh);
    // }
})