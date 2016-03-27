function typefile(obj)
{
	if (obj.value=='txt')
	{
		document.getElementById('blank').innerHTML = '';
		
		
		
		var newBox = document.createElement('p');
		document.getElementById('blank').appendChild(newBox);
		newBox.innerHTML = 'Название :';
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'text');
		newBox.setAttribute('name', 'name');
		newBox.setAttribute('required', 'required');
		document.getElementById('blank').appendChild(newBox);
		
		var newBox = document.createElement('p');
		document.getElementById('blank').appendChild(newBox);
		newBox.innerHTML = 'Загрузите текстовый файл (txt, docx):';
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'file');
		newBox.setAttribute('name', 'txt');
		newBox.setAttribute('accept', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document,text/plain');
		newBox.setAttribute('required', 'required');
		document.getElementById('blank').appendChild(newBox);
		
		
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'submit');
		newBox.setAttribute('value', 'Загрузить ');
		newBox.setAttribute('onclick', 'resultCreateTxt()');
		document.getElementById('blank').appendChild(newBox);
		
		var w1=document.getElementById('form1').offsetWidth;
		var w2=window.innerWidth;
		document.getElementById('slides').style.width=w2-w1-100;
	}
	else if (obj.value=='img')
	{		
		document.getElementById('blank').innerHTML = '';
		var newBox = document.createElement('p');
		document.getElementById('blank').appendChild(newBox);
		newBox.innerHTML = 'Название :';
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'text');
		newBox.setAttribute('name', 'name');
		newBox.setAttribute('required', 'required');
		document.getElementById('blank').appendChild(newBox);
		
		var newBox = document.createElement('p');
		document.getElementById('blank').appendChild(newBox);
		newBox.innerHTML = 'Загрузите изображение (jpg, jpeg и png):';
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'file');
		newBox.setAttribute('name', 'img');
		newBox.setAttribute('accept', 'image/jpeg, image/jpg, image/png');
		newBox.setAttribute('required', 'required');
		document.getElementById('blank').appendChild(newBox);
		
		
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'submit');
		newBox.setAttribute('value', 'Загрузить ');
		newBox.setAttribute('onclick', 'resultCreateImg()');
		document.getElementById('blank').appendChild(newBox);
		
		var w1=document.getElementById('form1').offsetWidth;
		var w2=window.innerWidth;
		document.getElementById('slides').style.width=w2-w1-100;
		}
		else if (obj.value=='vid')
	{		
		document.getElementById('blank').innerHTML = '';
		var newBox = document.createElement('p');
		document.getElementById('blank').appendChild(newBox);
		newBox.innerHTML = 'Название :';
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'text');
		newBox.setAttribute('name', 'name');
		newBox.setAttribute('required', 'required');
		document.getElementById('blank').appendChild(newBox);
		
		var newBox = document.createElement('p');
		document.getElementById('blank').appendChild(newBox);
		newBox.innerHTML = 'Загрузите Видео ():';
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'file');
		newBox.setAttribute('name', 'vid');
		newBox.setAttribute('accept', 'video/x-msvideo,video/mp4');
		newBox.setAttribute('required', 'required');
		document.getElementById('blank').appendChild(newBox);
		
		
		
		var newBox = document.createElement('input');
		newBox.setAttribute('type', 'submit');
		newBox.setAttribute('value', 'Загрузить ');
		newBox.setAttribute('onclick', 'resultCreateVid()');
		document.getElementById('blank').appendChild(newBox);
		
		var w1=document.getElementById('form1').offsetWidth;
		var w2=window.innerWidth;
		document.getElementById('slides').style.width=w2-w1-100;
		}
}

function resultCreate()
{
	if (document.getElementsByName('name')[0].value!='' )
	{
		document.getElementById('result').style.display='block';
	}
	if(document.getElementById('result').style.display=='block')
	{
		setTimeout(hideResult, 100000)
	}
}

function resultCreateTxt()
{
	if (document.getElementsByName('name')[0].value!='' && document.getElementsByName('txt')[0].value!='')
	{
		document.getElementById('result').style.display='block';
	}
	if(document.getElementById('result').style.display=='block')
	{
		setTimeout(hideResult, 100000)
	}
}
function resultCreateImg()
{
	if (document.getElementsByName('name')[0].value!='' && document.getElementsByName('img')[0].value!='')
	{
		document.getElementById('result').style.display='block';
	}
	if(document.getElementById('result').style.display=='block')
	{
		setTimeout(hideResult, 100000)
	}
}
function resultCreateVid()
{
	if (document.getElementsByName('name')[0].value!='' && document.getElementsByName('vid')[0].value!='')
	{
		document.getElementById('result').style.display='block';
	}
	if(document.getElementById('result').style.display=='block')
	{
		setTimeout(hideResult, 100000)
	}
}
function hideResult()
{
	document.getElementById('result').style.display='none';
}

function iconClick(obj) 
{
	var numberSlide=obj.id.substr(1);
	if (jsonType[numberSlide]=='txt')
	{
		document.getElementById('slide').innerHTML = '';
		var newSlide = document.createElement('img');
		newSlide.setAttribute("src", url+'2D/icons/'+jsonSlide2D[numberSlide]);
		newSlide.setAttribute('width', '100%');
		//newSlide.setAttribute('height', '100%');
		document.getElementById('slide').appendChild(newSlide);
		document.getElementById('text').innerHTML='Коментарий: </br>' + jsonComment[numberSlide];
	}
	
}

function showSlides()
{
	document.getElementById('scenarioSlides').innerHTML='';
	document.getElementById('scenarioSlides').innerHTML='<p>Слайды сценария: </p>';
	for (i=0;i<masSlides.length;i++)
	{
		if(masScenario[i]==document.getElementsByName('scenario')[0][document.getElementsByName('scenario')[0].selectedIndex].value)
		{
			var newPic = document.createElement('img');
			newPic.setAttribute("class", "slide");
			if (masSlides[i]==0)
			{
				newPic.setAttribute("src", url2+masIconSlides[i]);
			}
			else
			{
				newPic.setAttribute("src", url+'2D/icons/'+masIconSlides[i]);
			}
			newPic.setAttribute("alt", "Слайд  № "+(i+1));
			document.getElementById('scenarioSlides').appendChild(newPic);
		}
	}
}

function thisScenario()
{
	document.location.href = 'res/index.html?idLection='+numberLection+'&idScenario='+document.getElementsByName('scenario')[0][document.getElementsByName('scenario')[0].selectedIndex].value;
}

function thisScenario2()
{
	document.location.href = 'resWithVideo/index.html?idLection='+numberLection+'&idScenario='+document.getElementsByName('scenario')[0][document.getElementsByName('scenario')[0].selectedIndex].value;
}