<?php include_once('templates/header.php'); ?>

	<div class="row">
		<div class="col-lg-2  col-md-2 col-sm-2 ">
			<div class="row">
				<?php include_once('templates/side_menu.php'); ?>
			</div>
		</div>
		<div class="col-lg-10  col-md-10 col-sm-10 " id="data_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="panel panel-default gadget_container" id="jira_issue_type" ng-app="jiraIssueTypeApp" ng-controller="jiraIssueTypeController">
							<div class="panel-heading gadget_header">
								Jira Issue Type
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
						<?php //include('svn_data.php'); ?>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="panel panel-default gadget_container" id="jira_users_issue" ng-app="jiraUsersIssueApp" ng-controller="jiraUsersIssueController">
							<div class="panel-heading gadget_header">
								Jira Users' Issues
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
						<?php //include('svn_data.php'); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="panel panel-default gadget_container">
							<div class="panel-heading gadget_header">
								Panel Heading
							</div>
							<div class="panel-body gadget_body">
								Panel Content
							</div>
						</div>
						<?php //include('jira_data.php'); ?>
					</div>
					<div class="col-lg-6 col-md-6">
						<div class="panel panel-default gadget_container">
							<div class="panel-heading gadget_header">
								Panel Heading
							</div>
							<div class="panel-body gadget_body">
								Panel Content
							</div>
						</div>
						<?php //include('svn_data.php'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<?php include_once('templates/footer.php'); ?>