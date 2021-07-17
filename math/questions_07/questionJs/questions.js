function myFunction(id) {
  
	var i=0;
	
	while (x = document.getElementsByClassName(id)[i])
	{
		if (x.className.indexOf("w3-show") == -1) 
		{
			x.className += " w3-show";
		} 
		else 
		{ 
			x.className = x.className.replace(" w3-show", "");
		}
		i++;
	}
	
	//MATHJAX TO RELOAD
	MathJax.Hub.Queue(["Typeset", MathJax.Hub, "div_result"]);
				
}

function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

/* Script written by Adam Khoury @ DevelopPHP.com */
/* http://www.developphp.com/video/JavaScript/File-Upload-Progress-Bar-Meter-Tutorial-Ajax-PHP */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */

function _(el)
{
	return document.getElementById(el);
}

function uploadFile_01(){
	
	var file_01 = _("file_01").files[0];
	//alert(file.name+" | "+file.size+" | "+file.type);
	
	var formdata_01 = new FormData();
	formdata_01.append("file_01", file_01);
	
	var ajax = new XMLHttpRequest();
	
	ajax.upload.addEventListener("progress", progressHandler_01, false);
	
	ajax.addEventListener("load", completeHandler_01, false);
	
	ajax.addEventListener("error", errorHandler_01, false);
	
	ajax.addEventListener("abort", abortHandler_01, false);
	
	ajax.open("POST", "upload_multiple/file_upload_parser_01.php");
	
	ajax.send(formdata_01);
	
	$("#cancel").on('click', function () 
	{
		ajax.abort();
	})
}

function progressHandler_01(event)
{
	_("loaded_n_total_01").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	
	var percent = (event.loaded / event.total) * 100;
	
	_("progressBar_01").value = Math.round(percent);
	
	_("status_01").innerHTML = Math.round(percent)+"% uploaded... please wait";
}

function completeHandler_01(event)
{
	
	_("status_01").innerHTML = event.target.responseText;
	
	_("progressBar_01").value = 0;
}

function errorHandler_01(event)
{
	_("status_01").innerHTML = "Upload Failed";
}

function abortHandler_01(event)
{
	_("status_01").innerHTML = "Upload Canceled";
	
	_("progressBar_01").value = 0;
	
	_("loaded_n_total_01").style.display = "none";
}