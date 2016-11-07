(function (){
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

    angular.bootstrap($('#jira_table'), ['jiraApp']);
})();


$( document ).ready(function() { 
    var navh = $("body").height();
    var h = window.innerHeight;
    // if (navh > h){
        // alert(h);
        $("#div_menu").height(navh);
    // }
})