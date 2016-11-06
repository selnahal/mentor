var app = angular.module('sortApp', [])
    .controller('mainController', function($scope) {
        $scope.sortType     = 'id'; // set the default sort type
        $scope.sortReverse  = false;  // set the default sort order
        $scope.searchCommit   = '';     // set the default search/filter term
        
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
        console.log($scope.commitList);
});

$( document ).ready(function() { 
    var navh = $("body").height();//ide-nav
    var h = window.innerHeight;
    if (navh > h){
        $("#div_menu").height(navh);
    }
})