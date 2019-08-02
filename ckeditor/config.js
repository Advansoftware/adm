/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	//config.plugins = 'dialogui,dialog,about,a11yhelp,dialogadvtab,basicstyles,bidi,blockquote,notification,button,toolbar,clipboard,
	//panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,copyformatting,div,resize,
	//elementspath,enterkey,entities,popup,filetools,filebrowser,find,fakeobjects,flash,floatingspace,listblock,
	//richcombo,font,forms,format,horizontalrule,htmlwriter,iframe,wysiwygarea,image,indent,indentblock,indentlist,smiley,
	//justify,menubutton,
	//language,link,list,liststyle,magicline,maximize,newpage,pagebreak,pastetext,pastefromword,preview,print,removeformat,save,
	//selectall,showblocks,showborders,sourcearea,specialchar,scayt,stylescombo,tab,table,tabletools,tableselection,undo,lineutils,widgetselection,widget,
	//notificationaggregator,uploadwidget,uploadimage,wsc,youtube,imagebase,balloonpanel,balloontoolbar,xml,ajax,cloudservices,easyimage,autogrow,
	//image2,simage,uploadfile,textwatcher,autocomplete,textmatch,emoji,tableresize,imageresize,imageresizerowandcolumn,imageuploader,wordcount,html5video,
	//autolink,pbckcode,videodetector,btgrid,imagebrowser,autoembed,imagepaste,autosave,autocorrect,tabletoolstoolbar,videoembed,zsuploader,video,imgbrowse,
	//sourcedialog,embedbase,embed,divarea,uicolor,codemirror,chart,imgupload,imageresponsive,bootstrapTable,bgimage,imageCustomUploader,ckawesome,glyphicons,
	//btbutton,quicktable,mathjax,bootstrapTabs,emojione,docprops,docfont,pastecode,allowsave,Audio,backgrounds,symbol,save-to-pdf,ckeditor_fa,fastimage,codeTag,
	//bootstrapVisibility,uploadcare,zoom,oembed,texttransform,placeholder,spoiler,cssanim,pasteFromGoogleDoc,mediaembed,allmedias,letterspacing,mentions,ckeditor-gwf-plugin,
	//htmlbuttons,cleanuploader,media,html5validation,
	//html5audio,simple-image-browser,enhancedcolorbuttton,linkayt,contents,stylesheetparser,inserthtmlfile,soundPlayer,googledocs,videosnapshot,footnotes,computedstyles,
	//simplebutton,nbsp,widgetcontextmenu,mediabrowser,niftytimers,ccmsacdc,autoplaceholder,dropdownmenumanager,embedsemantic';
	
	config.extraPlugins = 'videoembed,image,autoembed,autolink,emojione,googledocs';
	config.skin = 'office2013';
};
