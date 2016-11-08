<?php include_once('templates/header.php'); ?>
	<!-- <div class="row visible-sm hidden-lg hidden-md visible-xs">
		<?php //include_once('templates/top_menu.php'); ?>
	</div> -->
	<div class="row">
		<div class="col-lg-2  col-md-2 col-sm-2 col-xs-12">
			<div class="row hidden-xs visible-lg hidden-sm visible-md">
				<?php include_once('templates/side_menu.php'); ?>
			</div>
		</div>
		<div class="col-lg-10  col-md-10 col-sm-12 " id="data_container">
			<div class="container">
				<input type="hidden" id="edited_panel">
				<div id="edit_widget_modal" class="modal fade" role="dialog">
			  		<div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      	<div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        	<h4 class="modal-title">Modal Header</h4>
				      	</div>
				     	<div class="modal-body">
				     		<label for="widget_name">Widget New Title</label>
				     		<input type="text" class="form-control" name="widget_name" id="widget_name">
				      	</div>
				      	<div class="modal-footer">
				      			<button type="button" class="btn btn-primary" id="modal_update_btn">Update</button>
				        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      		</div>
				    	</div>

				  	</div>
				</div>
				<div class="panel panel-default gadget_container" id="jira_issue_type" ng-app="jiraIssueTypeApp" ng-controller="jiraIssueTypeController">
					<div class="panel-heading gadget_header">
						<label> Jira Issue Type </label>
						<div id="btns_div" class="pull-right">
							<span class="glyphicon glyphicon-trash pull-right btn_delete" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-cog pull-right btn_settings" aria-hidden="true"></span>
						</div>
					</div>
					<div class="panel-body gadget_body">
						<nvd3-pie-chart
							id="exampleId"
							data="data"
							x="xFunction()"
							y="yFunction()"
							width="{{ width }}"
							height="{{ height }}"
							showLabels="true"
							pieLabelsOutside="true"
							tooltips="true"
							tooltipcontent="toolTipContentFunction()"
							showLegend="true"
							showValues="true"
    						labelType="percent"
    						color="colorFunction()"
    						legendcolor="colorFunction()">
					      <svg></svg>
					    </nvd3-pie-chart>
					</div>
				</div>
				<div class="panel panel-default gadget_container" id="jira_users_issue" ng-app="jiraUsersIssueApp" ng-controller="jiraUsersIssueController">
					<div class="panel-heading gadget_header">
						<label>Jira Users' Issues</label>
						<div id="btns_div" class="pull-right">
							<span class="glyphicon glyphicon-trash pull-right btn_delete" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-cog pull-right btn_settings" aria-hidden="true"></span>
						</div>
					</div>
					<div class="panel-body gadget_body">
						<nvd3-multi-bar-chart
					    	data="data"
					        width="{{ width }}"
					        height="{{ height }}"
					        showXAxis="true"
					        showYAxis="true"
					        showLegend="true"
					        labelType="percent"
					        tooltips="true"
					        tooltipcontent="toolTipContentFunction()"
					        color="colorFunction()"
    						legendcolor="colorFunction()">
					       	<svg></svg>
					    </nvd3-multi-bar-chart>
					</div>
				</div>
				<div class="panel panel-default gadget_container" id="svn_file_extension" ng-app="svnFileExtensionApp" ng-controller="svnFileExtensionController">
					<div class="panel-heading gadget_header">
						<label>SVN Lines of Code by File Extension</label>
						<div id="btns_div" class="pull-right">
							<span class="glyphicon glyphicon-trash pull-right btn_delete" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-cog pull-right btn_settings" aria-hidden="true"></span>
						</div>
					</div>
					<div class="panel-body gadget_body">
						<nvd3-pie-chart
							id="exampleId3"
							data="data"
							x="xFunction()"
							y="yFunction()"
							width="{{ width }}"
							height="{{ height }}"
							showLabels="false"
							pieLabelsOutside="false"
							tooltips="true"
							tooltipcontent="toolTipContentFunction()"
							showLegend="true"
							showValues="true"
    						labelType="percent"
    						color="colorFunction()"
    						legendcolor="colorFunction()">
					      <svg></svg>
					    </nvd3-pie-chart>
					</div>
				</div>
				<div class="panel panel-default gadget_container" id="top_committers" ng-app="topCommittersApp" ng-controller="topCommittersController">
					<div class="panel-heading gadget_header">
						<label>SVN Top Commiters</label>
						<div id="btns_div" class="pull-right">
							<span class="glyphicon glyphicon-trash pull-right btn_delete" aria-hidden="true"></span>
							<span class="glyphicon glyphicon-cog pull-right btn_settings" aria-hidden="true"></span>
						</div>
					</div>
					<div class="panel-body gadget_body">
						<nvd3-multi-bar-horizontal-chart
							id="exampleId4"
							data="data"
							width="{{ width }}"
							height="{{ height }}"
							tooltips="true"
							tooltipcontent="toolTipContentFunction()"
							showLegend="false"
							showValues="true"
    						labelType="percent"
    						color="colorFunction()"
    						legendcolor="colorFunction()"
    						valueFormat="valueFormatFunction()"
    						showXAxis="true"
							showYAxis="true">
					      <svg></svg>
					    </nvd3-multi-bar-horizontal-chart>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php include_once('templates/footer.php'); ?>