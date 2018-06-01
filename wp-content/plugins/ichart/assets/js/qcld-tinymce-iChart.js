;(function( $ ) {
    tinymce.PluginManager.add('qcld_short_btn_chart', function( editor,url )
    {
        var shortcodeValues = [];

        editor.addButton('qcld_short_btn_chart', {
            //type: 'listbox',
			title : 'iChart Shortcode',
            //text: 'iChart',
            //icon: 'fa-meetup',
            image : url + '/ichart.png',
            onclick : function(e){
                e.preventDefault();
		
				$('#ichart-qcld-chart-field-modal').show();
            },
            values: shortcodeValues
        });
    });

    var selector = '';
	
	$('.iChartgetallvalue'). on("click", function(e){
		e.preventDefault();
		var setlabel = [];
		var setvalue = [];
		var setbgcolor = [];
		
		$('#ichart-iChartdatasettable tbody input').each(function(){
			//values[$(this).attr('name')] = $(this).val();
			
			if($(this).attr('name')==='label[]'){
				setlabel.push($(this).val());
			}
			if($(this).attr('name')==='value[]'){
				setvalue.push($(this).val());
			}
			if($(this).attr('name')==='bgcolor[]'){
				setbgcolor.push($(this).val());
			}
		})
		var stus = 0;
		if(setlabel===''){
			stus = 1;
		}
		var bgcolor = "'" + setbgcolor.join("','") + "'";
		var charttype = $('#ichart-charttype').val();
		
		var carttitle = $('#ichart-charttitle').val();
		if(carttitle===''){
			stus = 1;
		}
		var datasetname = $('#ichart-datasetname').val();
		if(datasetname===''){
			stus = 1;
		}
		var backgroundcolor = $('#ichart-backgroundcolor').val();
		var width = $('#ichart-width').val();
		var bordercolor = $('#ichart-bordercolor').val();
		var pointerstyle = $('#ichart-pointerstyle').val();
		var lstyle = $('#ichart-lstyle').val();

		if(stus==1){
			alert('Please fill the form correctly!');
		}else{
			var shortcode = '[qcld-ichart label="'+setlabel+'" value="'+setvalue+'" type="'+charttype+'" title="'+carttitle+'" datasetname="'+datasetname+'" width="'+width+'" backgroundcolor="'+backgroundcolor+'" bgcolor="'+bgcolor+'" bordercolor="'+bordercolor+'" pointerstyle="'+pointerstyle+'" linestyle="'+lstyle+'"]';
		tinyMCE.activeEditor.selection.setContent(shortcode);
		$('#ichart-qcld-chart-field-modal').hide();
		}
		
		
	});


 

}(jQuery));