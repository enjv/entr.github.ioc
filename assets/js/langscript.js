var userLang= navigator.language || navigator.userLanguage;
//alert("the language is : " + userLang.substr(0,2));
var langKey=userLang.substr(0,2);
function getlocalizeText(key){
	if(!langs.hasOwnProperty(langKey))langKey='en';
	
	if(!langs[langKey].hasOwnProperty(key))langKey='en';
	
	return langs[langKey][key];
}
function writeLocalize(key){
document.write(getlocalizeText(key));
}
var langs=new Object();
			
langs['en']={'title':'Event Mobile Legends',
				'mainPageTitle':'MOBILE LEGENDS <br/> <span>FREE SKIN &amp; DIAMONDS</span>',
				'skin':'SKIN',
				'diamond':'DIAMOND'
				
				};

langs['ar']={'hello':'مرحبا',
			'login':'تسجيل'};
