<div  ng-app="svnApp" ng-controller="svnController">
	<h2> SVN Commits </h2>
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
				<th ng-click="sort('owner')">Owner
					<span class="glyphicon sort-icon" ng-show="sortType=='owner'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
				<th ng-click="sort('file')">File
					<span class="glyphicon sort-icon" ng-show="sortType=='file'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
				<th ng-click="sort('type')">Type
					<span class="glyphicon sort-icon" ng-show="sortType=='type'" ng-class="{'glyphicon-chevron-up':sortReverse,'glyphicon-chevron-down':!sortReverse}"></span>
				</th>
			</tr>
		</thead>

		<tbody>
			<tr dir-paginate="commit in commitList | orderBy:sortType:sortReverse | filter:searchData |itemsPerPage:5">
				<td>{{ commit.id }}</td>
				<td>{{ commit.owner }}</td>
				<td>{{ commit.file }}</td>
				<td>{{ commit.type }}</td>
			</tr>
		</tbody>
	
	</table>
	<dir-pagination-controls
       max-size="5"
       direction-links="true"
       boundary-links="true" >
    </dir-pagination-controls>
</div>