<div class="panel panel-default gadget_container" id="svn_file_extension" ng-app="svnFileExtensionApp" ng-controller="svnFileExtensionController">
	<div class="panel-heading gadget_header">
		SVN Lines of Code by File Extension
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
		SVN Top Commiters
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