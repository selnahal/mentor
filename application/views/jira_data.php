<div  ng-app="jiraApp" ng-controller="jiraController" id="jira_table">
	<h2> Jira Data </h2>
	<form>
		<div class="form-group">
			<div class="input-group">
				<div class="input-group-addon">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</div>
				<input type="text" class="form-control" placeholder="Search" ng-model="searchData">
			</div>      
		</div>
	</form>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th ng-click="sort('id')">ID
					<span class="glyphicon sort-icon" ng-show="sortType=='id'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
				<th ng-click="sort('assignee')">Assignee
					<span class="glyphicon sort-icon" ng-show="sortType=='assignee'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
				<th ng-click="sort('issuetype')">Issue Type
					<span class="glyphicon sort-icon" ng-show="sortType=='issuetype'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
				<th ng-click="sort('components')">Components
					<span class="glyphicon sort-icon" ng-show="sortType=='components'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
			</tr>
		</thead>

		<tbody>
			<tr dir-paginate="issue in issuesList | orderBy:sortType:sortReverse | filter:searchData |itemsPerPage:5">
				<td>{{ issue.id }}</td>
				<td>{{ issue.assignee }}</td>
				<td>{{ issue.issuetype }}</td>
				<td>{{ issue.components }}</td>
			</tr>
		</tbody>
	
	</table>
	<dir-pagination-controls
       max-size="5"
       direction-links="true"
       boundary-links="true" >
    </dir-pagination-controls>
</div>