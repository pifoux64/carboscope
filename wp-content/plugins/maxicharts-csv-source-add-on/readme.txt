=== MaxiCharts CSV Source add-on ===
Contributors: munger41
Tags: csv, comma, separated, values, chart, chartsjs, graph, graphs, visualisation, survey, MaxiCharts, maxicharts, entry, stats, visualization, HTML5, canvas, pie chart, line chart, charts, chart js, plugin, widget, shortcode
Requires at least: 4.0
Tested up to: 4.9.2
Stable tag: 1.0

Create beautiful HTML5 charts from CSV files datas with a simple shortcode.

== Description ==

Create beautiful HTML5 charts from CSV files datas with [a simple shortcode](https://maxicharts.com/category/csv-add-on/). Requires free [MaxiCharts](https://wordpress.org/plugins/maxicharts/ "MaxiCharts") plugin. 

### Usage ###

Use shortcode *csv2chartjs*

with parameters:

* *url* : required, must be the URL or the absolute path to the file on your server
* *delimiter* : delimiter used in your csv file, defaults to `,`
* *columns* : columns to graph, just one, or a range `0-5` or `2,4-7` or something else
* *rows* : rows to graph (first is considered header)
* *information_source* : any string specify where the data come from (good practice!)

`[csv2chartjs url="https://maxicharts.com/wp-content/uploads/2017/04/mysuperfilewithdata.csv" type="bar" width="100%" delimiter=";" rows="2-13" columns="0-5" xaxislabel="%" information_source='<a target="_blank" href="https://specify_data_source">Data source</a>'/]`

[>> Demonstration site <<](https://maxicharts.com/category/csv-add-on/)

== Installation ==

### Easy ###
1. Search via plugins > add new.
2. Find the plugin listed and click activate.
3. Use the Shortcode

== Screenshots ==

== Changelog ==

* 1.2.3 - bug on information source fixed

* 1.2.2 - bug on csv delimiter if catched from URL

* 1.2.1 - other logger categories

* 1.2 - log fix

* 1.1 - monolog replaced log4php

* 1.0 - module extraction