		$(document).ready(function() {
    		$('a').click(function() {
    		var qr = new QRious({
  				value: $(this).attr('href'),
  				size: 500
			});
    		var qrcodeData = qr.toDataURL();
    		var html = "<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css\"><script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js\"><\/script><style>html,body{margin:0;}img{}</style><img src=\"" + qrcodeData +"\"></img> "
        	var w = '500'
        	var h = '500'
        	var y = window.top.outerHeight / 2 + window.top.screenY - ( h / 2)
   			var x = window.top.outerWidth / 2 + window.top.screenX - ( w / 2)
        	var tab = window.open('about:blank', 'MsgWindow', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+y+', left='+x);
			tab.document.write(html); // where 'html' is a variable containing your HTML
			tab.document.close(); // to finish loading the page
        	return false;
    		});
		});