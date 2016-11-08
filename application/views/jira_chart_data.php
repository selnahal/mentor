<div class="panel panel-default gadget_container" id="jira_issue_type" ng-app="jiraIssueTypeApp" ng-controller="jiraIssueTypeController">
	<div class="panel-heading gadget_header">
		Jira Issue Type 
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
		Jira Users' Issues
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