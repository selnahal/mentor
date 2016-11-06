<div ng-controller="mainController">
	<h2> SVN Data </h2>
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
				<td>
					<a href="#" ng-click="sortType = 'id'; sortReverse = !sortReverse">
						ID 
						<span ng-show="sortType == 'id' && !sortReverse" class="fa fa-caret-down"></span>
						<span ng-show="sortType == 'id' && sortReverse" class="fa fa-caret-up"></span>
					</a>
				</td>
				<td>
					<a href="#" ng-click="sortType = 'owner'; sortReverse = !sortReverse">
						Owner
						<span ng-show="sortType == 'owner' && !sortReverse" class="fa fa-caret-down"></span>
						<span ng-show="sortType == 'owner' && sortReverse" class="fa fa-caret-up"></span>
					</a>
				</td>
				<td>
					<a href="#" ng-click="sortType = 'file'; sortReverse = !sortReverse">
						File
						<span ng-show="sortType == 'file' && !sortReverse" class="fa fa-caret-down"></span>
						<span ng-show="sortType == 'file' && sortReverse" class="fa fa-caret-up"></span>
					</a>
				</td>
			</tr>
		</thead>

		<tbody>
			<tr ng-repeat="commit in commitList | orderBy:sortType:sortReverse | filter:searchData">
				<td>{{ commit.id }}</td>
				<td>{{ commit.owner }}</td>
				<td>{{ commit.file }}</td>
			</tr>
		</tbody>

	</table>
</div>