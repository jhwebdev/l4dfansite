var isCompatible=function(){if(navigator.appVersion.indexOf('MSIE')!==-1&&parseFloat(navigator.appVersion.split('MSIE')[1])<6){return false;}return true;};var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":{"loadScript":"/load.php","apiScript":"/api.php"},"common":{"loadScript":"https://slot1-images.wikia.nocookie.net/__load/-/","apiScript":"/api.php"}});mw.loader.register([["site",1517795100,[],"site"],["noscript",1202225400,[],"noscript"],["startup",1528923600,[],"startup"],["user",1202225400,[],"user"],["user.groups",1202225400,[],"user"],["user.options",1528923600,[],"private"],["user.cssprefs",1528923600,["mediawiki.user"],"private"],["user.tokens",1202225400,[],"private"],["filepage",1202225400],["mediawiki.language.data",1521714600,["mediawiki.language.init"]],["skins.monobook",1528811100,[],null,"common"],["jquery",1528811100,[],null,"common"],["jquery.appear",1528811100,[],null,"common"],["jquery.arrowSteps",1528811100,[],null,"common"],[
"jquery.async",1528811100,[],null,"common"],["jquery.autoEllipsis",1528811100,["jquery.highlightText"],null,"common"],["jquery.byteLength",1528811100,[],null,"common"],["jquery.byteLimit",1528811100,["jquery.byteLength"],null,"common"],["jquery.checkboxShiftClick",1528811100,[],null,"common"],["jquery.client",1528811100,[],null,"common"],["jquery.collapsibleTabs",1528811100,[],null,"common"],["jquery.color",1528811100,["jquery.colorUtil"],null,"common"],["jquery.colorUtil",1528811100,[],null,"common"],["jquery.cookie",1528811100,[],null,"common"],["jquery.delayedBind",1528811100,[],null,"common"],["jquery.expandableField",1528811100,["jquery.delayedBind"],null,"common"],["jquery.farbtastic",1528811100,["jquery.colorUtil"],null,"common"],["jquery.footHovzer",1528811100,[],null,"common"],["jquery.form",1528811100,[],null,"common"],["jquery.getAttrs",1528811100,[],null,"common"],["jquery.highlightText",1528811100,[],null,"common"],["jquery.hoverIntent",1528811100,[],null,"common"],[
"jquery.json",1528811100,[],null,"common"],["jquery.localize",1528811100,[],null,"common"],["jquery.makeCollapsible",1528811100,[],null,"common"],["jquery.messageBox",1528811100,[],null,"common"],["jquery.mockjax",1528811100,[],null,"common"],["jquery.mw-jump",1528811100,[],null,"common"],["jquery.mwExtension",1528811100,[],null,"common"],["jquery.placeholder",1528811100,[],null,"common"],["jquery.qunit",1528811100,[],null,"common"],["jquery.qunit.completenessTest",1528811100,["jquery.qunit"],null,"common"],["jquery.spinner",1528811100,[],null,"common"],["jquery.suggestions",1528811100,["jquery.autoEllipsis"],null,"common"],["jquery.tabIndex",1528811100,[],null,"common"],["jquery.tablesorter",1528811100,["jquery.mwExtension"],null,"common"],["jquery.textSelection",1528811100,[],null,"common"],["jquery.validate",1528811100,[],null,"common"],["jquery.xmldom",1528811100,[],null,"common"],["jquery.tipsy",1528811100,[],null,"common"],["jquery.ui.core",1528811100,["jquery"],"jquery.ui",
"common"],["jquery.ui.widget",1528811100,[],"jquery.ui","common"],["jquery.ui.mouse",1528811100,["jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.position",1528811100,[],"jquery.ui","common"],["jquery.ui.draggable",1528811100,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.droppable",1528811100,["jquery.ui.core","jquery.ui.mouse","jquery.ui.widget","jquery.ui.draggable"],"jquery.ui","common"],["jquery.ui.resizable",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.selectable",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.sortable",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.accordion",1528811100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.autocomplete",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.position"],"jquery.ui","common"],[
"jquery.ui.button",1528811100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.datepicker",1528811100,["jquery.ui.core"],"jquery.ui","common"],["jquery.ui.dialog",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.button","jquery.ui.draggable","jquery.ui.mouse","jquery.ui.position","jquery.ui.resizable"],"jquery.ui","common"],["jquery.ui.progressbar",1528811100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.ui.slider",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse"],"jquery.ui","common"],["jquery.ui.tabs",1528811100,["jquery.ui.core","jquery.ui.widget"],"jquery.ui","common"],["jquery.effects.core",1528811100,["jquery"],"jquery.ui","common"],["jquery.effects.blind",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.bounce",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.clip",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.drop",1528811100,[
"jquery.effects.core"],"jquery.ui","common"],["jquery.effects.explode",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fade",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.fold",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.highlight",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.pulsate",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.scale",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.shake",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.slide",1528811100,["jquery.effects.core"],"jquery.ui","common"],["jquery.effects.transfer",1528811100,["jquery.effects.core"],"jquery.ui","common"],["mediawiki",1528811100,[],null,"common"],["mediawiki.api",1528811100,["mediawiki.util"],null,"common"],["mediawiki.api.category",1528811100,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.edit",
1528811100,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.parse",1528811100,["mediawiki.api"],null,"common"],["mediawiki.api.titleblacklist",1528811100,["mediawiki.api","mediawiki.Title"],null,"common"],["mediawiki.api.watch",1528811100,["mediawiki.api","mediawiki.user"],null,"common"],["mediawiki.debug",1528811100,["jquery.footHovzer"],null,"common"],["mediawiki.debug.init",1528811100,["mediawiki.debug"],null,"common"],["mediawiki.feedback",1528811100,["mediawiki.api.edit","mediawiki.Title","mediawiki.jqueryMsg","jquery.ui.dialog"],null,"common"],["mediawiki.htmlform",1528811100,[],null,"common"],["mediawiki.Title",1528811100,["jquery.byteLength","mediawiki.util"],null,"common"],["mediawiki.Uri",1528811100,[],null,"common"],["mediawiki.user",1528811100,["jquery.cookie"],null,"common"],["mediawiki.util",1528811100,["jquery.client","jquery.cookie","jquery.messageBox","jquery.mwExtension"],null,"common"],["mediawiki.action.edit",1528811100,["jquery.textSelection",
"jquery.byteLimit"],null,"common"],["mediawiki.action.history",1528811100,["jquery.ui.button"],"mediawiki.action.history","common"],["mediawiki.action.history.diff",1528811100,[],"mediawiki.action.history","common",["sass"]],["mediawiki.action.view.dblClickEdit",1528811100,["mediawiki.util","mediawiki.page.startup"],null,"common"],["mediawiki.action.view.metadata",1528811100,[],null,"common"],["mediawiki.action.view.rightClickEdit",1528811100,[],null,"common"],["mediawiki.action.watch.ajax",1528811100,["mediawiki.api.watch","mediawiki.util"],null,"common"],["mediawiki.language",1528811100,["mediawiki.language.data","mediawiki.cldr"],null,"common"],["mediawiki.cldr",1528811100,["mediawiki.libs.pluralruleparser"],null,"common"],["mediawiki.libs.pluralruleparser",1528811100,[],null,"common"],["mediawiki.language.init",1528811100,[],null,"common"],["mediawiki.jqueryMsg",1528811100,["mediawiki.util","mediawiki.language"],null,"common"],["mediawiki.language.months",1528811100,[
"mediawiki.language"],null,"common"],["mediawiki.language.names",1520629200,["mediawiki.language.init"]],["mediawiki.libs.jpegmeta",1528811100,[],null,"common"],["mediawiki.page.ready",1528811100,["jquery.checkboxShiftClick","jquery.makeCollapsible","jquery.mw-jump","mediawiki.util"],null,"common"],["mediawiki.page.startup",1528811100,["jquery.client","mediawiki.util"],null,"common"],["mediawiki.special",1528811100,[],null,"common"],["mediawiki.special.block",1528811100,["mediawiki.util"],null,"common"],["mediawiki.special.changeemail",1528811100,["mediawiki.util"],null,"common"],["mediawiki.special.changeslist",1528811100,["jquery.makeCollapsible"],null,"common"],["mediawiki.special.movePage",1528811100,["jquery.byteLimit"],null,"common"],["mediawiki.special.preferences",1528811100,[],null,"common"],["mediawiki.special.recentchanges",1528811100,["mediawiki.special"],null,"common"],["mediawiki.special.search",1528811100,[],null,"common"],["mediawiki.special.undelete",1528811100,[],null
,"common"],["mediawiki.special.upload",1528811100,["mediawiki.libs.jpegmeta","mediawiki.util"],null,"common"],["mediawiki.special.javaScriptTest",1528811100,["jquery.qunit"],null,"common"],["test.sinonjs",1528811100,[],null,"common"],["mediawiki.tests.qunit.testrunner",1528923600,["jquery.qunit","jquery.qunit.completenessTest","mediawiki.page.startup","mediawiki.page.ready","test.sinonjs"],null,"common"],["mediawiki.legacy.ajax",1528811100,["mediawiki.util","mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.commonPrint",1528811100,[],null,"common"],["mediawiki.legacy.config",1528811100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.IEFixes",1528811100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.mwsuggest",1528811100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.preview",1528811100,["mediawiki.legacy.wikibits"],null,"common"],["mediawiki.legacy.protect",1528811100,["mediawiki.legacy.wikibits","jquery.byteLimit"],null,
"common"],["mediawiki.legacy.shared",1528811100,[],null,"common"],["mediawiki.legacy.upload",1528811100,["jquery.spinner","mediawiki.util"],null,"common"],["mediawiki.legacy.wikibits",1528811100,["mediawiki.util","wikia.importScript"],null,"common"],["mediawiki.legacy.wikiprintable",1528811100,[],null,"common"],["amd",1528811100,[],null,"common"],["amd.shared",1202225400,["wikia.instantGlobals","wikia.cache","wikia.cookies","wikia.document","wikia.geo","wikia.fbLocale","wikia.loader","wikia.location","wikia.log","wikia.mw","wikia.nirvana","wikia.querystring","wikia.history","wikia.throbber","wikia.thumbnailer","wikia.tracker","wikia.window","wikia.abTest","underscore"],null,"common"],["wikia.window",1528811100,["amd"],null,"common"],["wikia.cache",1528811100,["amd","wikia.window"],null,"common"],["wikia.document",1528811100,["amd","wikia.window"],null,"common"],["wikia.location",1528811100,["amd","wikia.window"],null,"common"],["wikia.nirvana",1528811100,["amd"],null,"common"],[
"wikia.mw",1528811100,["amd","wikia.window"],null,"common"],["wikia.fbLocale",1528811100,["wikia.geo"],null,"common"],["wikia.loader",1528811100,["amd","wikia.window","wikia.mw","wikia.nirvana","wikia.fbLocale"],null,"common"],["wikia.querystring",1528811100,["amd","wikia.window"],null,"common"],["wikia.history",1528811100,["amd","wikia.window"],null,"common"],["wikia.cookies",1528811100,["amd","wikia.window"],null,"common"],["wikia.log",1528811100,["amd","wikia.querystring","wikia.cookies"],null,"common"],["wikia.abTest",1528811100,["amd","wikia.window"],null,"common"],["wikia.trackingOptOut",1528811100,["amd","wikia.querystring"],null,"common"],["wikia.instantGlobals",1528811100,["amd","wikia.trackingOptOut","wikia.window"],null,"common"],["wikia.thumbnailer",1528811100,["amd"],null,"common"],["wikia.geo",1528811100,["amd","wikia.cookies","wikia.querystring"],null,"common"],["wikia.tracker",1528811100,["amd","wikia.window","wikia.log","wikia.tracker.stub"],null,"common"],[
"wikia.tracker.stub",1528811100,["amd","wikia.window"],null,"common"],["wikia.throbber",1528811100,["amd"],null,"common"],["underscore",1528811100,["amd"],null,"common"],["wikia.aim",1528811100,["amd"],null,"common"],["wikia.uniqueId",1528811100,["amd"],null,"common"],["wikia.modernizr",1528923600,["amd","modernizr"],null,"common"],["wikia.mustache",1528811100,["amd"],null,"common"],["wikia.underscore",1528811100,["amd","wikia.window"],null,"common"],["wikia.stickyElement",1528811100,["amd","wikia.window","wikia.document","wikia.underscore"],null,"common"],["wikia.jquery.ui",1528811100,["jquery.ui.core","jquery.ui.widget","jquery.ui.mouse","jquery.ui.position","jquery.ui.draggable","jquery.ui.droppable","jquery.ui.sortable","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.tabs","jquery.ui.datepicker"],"jquery.ui","common"],["jquery.mustache",1528811100,["wikia.mustache"],null,"common"],["jquery.autocomplete",1528811100,[],null,"common"],["jquery.dataTables",1528811100,[],null,
"common"],["jquery.timeago",1528811100,[],null,"common"],["wikia.yui",1528811100,[],"yui","common"],["wikia.importScript",1528811100,[],null,"common"],["wikia.article.edit",1528811100,["wikia.tracker"],null,"common"],["jquery.uls.data",1528811100],["jquery.i18n",1528811100,["mediawiki.libs.pluralruleparser"]],["ext.math.mathjax",1528811100,[],"ext.math.mathjax"],["ext.math.mathjax.enabler",1528811100],["ext.wikia.TimeAgoMessaging",1528811100,["jquery.timeago","mediawiki.jqueryMsg"]],["ext.designSystem",1202225400],["wikia.ext.instantGlobals",1528923600,[],null,"common"],["wikia.ext.instantGlobalsOverride",1528811100,[],null,"common"],["ext.bannerNotifications",1202225400],["ext.quickTools",1528811100,["mediawiki.user","mediawiki.util"]],["ext.createUserPage",1528811100,["mediawiki.user","mediawiki.util"]],["ext.quickAdopt",1528811100,["mediawiki.util","ext.createUserPage"]],["ext.wikia.facebookPreferences",1528811100],["ext.wikia.facebookTags",1528811100,[],null,"common"],[
"ext.wikia.multiLookup",1528811100],["ext.wikia.ListGlobalUsers",1528811100],["ext.geshi.local",1202225400],["ext.siteWideMessages.anon",1528811100],["ext.scribunto",1528811100],["ext.scribunto.edit",1528811100,["ext.scribunto","mediawiki.api"]],["ext.wikia.InfoboxBuilder",1528811100,[],null,"local",["sass"]],["ext.categoryTree",1528811100],["ext.categoryTree.css",1528811100],["ext.checkUser",1528811100,["mediawiki.util"]],["ext.cite",1528811100,["jquery.tooltip"]],["jquery.tooltip",1528811100],["ext.wikia.ajaxpoll",1528811100,[],null,"local",["sass"]],["ext.wikia.WMU",1528811100,["wikia.yui","jquery.aim"]],["ext.wikia.LinkSuggest",1528811100,["jquery.ui.autocomplete"]],["ext.wikia.ListUsers",1528811100,["jquery.ui.autocomplete","jquery.dataTables"],null,"local",["sass"]],["ext.tabber",1528811100],["ext.nuke",1528811100],["ext.userLogin",1202225400],["ext.UserProfilePage.Lightbox",1528811100,["mediawiki.jqueryMsg"],null,"local",["sass"]],["ext.renameuser.modal",1528811100,[
"mediawiki.util"]],["ext.Chat2.ChatBanModal",1528811100],["ext.Chat2.ChatWidget",1202225400],["ext.Chat2.ChatBanList",1528811100,["jquery.dataTables","wikia.nirvana"],null,"local",["sass"]],["ext.Chat2",1202225400,["mediawiki.jqueryMsg"]],["ext.AdminDashboard",1202225400],["wikia.ext.abtesting",1527034500,[],null,"common"],["wikia.ext.abt3sting",1527034500,[],null,"common"],["wikia.ext.abtest",1528811100],["wikia.ext.abtesting.edit.styles",1528811100,[],null,"local",["sass"]],["wikia.ext.abtesting.edit",1528811100],["oojs",1528811100],["oojs-ui",1528811100,["oojs","oojs-ui.styles"]],["oojs-ui.styles",1528811100],["jquery.visibleText",1528811100],["Base64.js",1528811100],["easy-deflate.core",1528811100,["Base64.js"]],["easy-deflate.deflate",1528811100,["easy-deflate.core"]],["unicodejs",1528811100],["unicodejs.wordbreak",1202225400,["unicodejs"]],["papaparse",1528811100],["rangefix",1528811100],["ext.visualEditor.viewPageTarget.init",1528811100,["jquery.client","mediawiki.page.startup",
"mediawiki.Title","mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],["ext.visualEditor.viewPageTarget.noscript",1528811100],["ext.visualEditor.viewPageTarget",1528811100,["ext.visualEditor.base","ext.visualEditor.mediawiki","ext.visualEditor.core.desktop","jquery.placeholder","mediawiki.feedback","mediawiki.jqueryMsg","mediawiki.util"]],["ext.visualEditor.mobileViewTarget",1528811100,["ext.visualEditor.base","ext.visualEditor.mediawiki.mobile","ext.visualEditor.core.mobile","ext.visualEditor.mwimage.core"]],["ext.visualEditor.ve",1528811100],["ext.visualEditor.track",1528811100,["ext.visualEditor.ve"]],["ext.visualEditor.base",1528811100,["oojs","oojs-ui","unicodejs","rangefix","ext.visualEditor.ve"]],["ext.visualEditor.mediawiki",1528811100,["jquery.visibleText","jquery.byteLength","jquery.client","mediawiki.api","mediawiki.language","mediawiki.Title","mediawiki.Uri","mediawiki.user","mediawiki.util","easy-deflate.deflate","user.options","user.tokens",
"ext.visualEditor.base","ext.visualEditor.track"]],["ext.visualEditor.mediawiki.mobile",1528811100,["ext.visualEditor.mediawiki","ext.visualEditor.core.mobile"]],["ext.visualEditor.standalone",1528811100,["ext.visualEditor.base","jquery.i18n"]],["ext.visualEditor.data",1528811100,["ext.visualEditor.base"]],["ext.visualEditor.core",1528811100,["unicodejs","papaparse","jquery.uls.data","ext.visualEditor.base"]],["ext.visualEditor.core.desktop",1528811100,["ext.visualEditor.core"]],["ext.visualEditor.core.mobile",1528811100,["ext.visualEditor.core"]],["ext.visualEditor.mwcore",1528811100,["ext.visualEditor.core","mediawiki.Title","mediawiki.action.history.diff","mediawiki.user","mediawiki.util","mediawiki.jqueryMsg","jquery.autoEllipsis","jquery.byteLimit"]],["ext.visualEditor.mwformatting",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage.core",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwimage",1528811100,["ext.visualEditor.mwimage.core"]],[
"ext.visualEditor.mwlink",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwmeta",1528811100,["ext.visualEditor.mwcore","ext.visualEditor.mwlink"]],["ext.visualEditor.mwreference.core",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwreference",1528811100,["ext.visualEditor.mwreference.core","ext.visualEditor.mwtransclusion"]],["ext.visualEditor.mwtransclusion.core",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwtransclusion",1528811100,["ext.visualEditor.mwtransclusion.core","mediawiki.jqueryMsg","mediawiki.language"]],["ext.visualEditor.language",1528811100,["ext.visualEditor.core","mediawiki.language.names"]],["ext.visualEditor.mwalienextension",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.mwgallery",1528811100,["ext.visualEditor.mwcore"]],["ext.visualEditor.experimental",1202225400,["ext.visualEditor.language","ext.visualEditor.mwalienextension"]],["ext.visualEditor.wikia.viewPageTarget.init",1528811100,["jquery.client",
"jquery.byteLength","mediawiki.Title","mediawiki.Uri","mediawiki.util","user.options","ext.visualEditor.track"]],["ext.visualEditor.wikia.oasisViewPageTarget",1528811100,["ext.visualEditor.viewPageTarget"]],["ext.visualEditor.wikia.core",1528811100,["ext.visualEditor.core.desktop","ext.visualEditor.mwimage","ext.visualEditor.mwmeta"]],["ext.closeMyAccount",1528811100,[],null,"local",["sass"]],["ext.TwitterTag",1528811100],["ext.wikia.VKTag",1528811100],["ext.ArticleVideo.jw",1528811100],["ext.maps.common",1528811100,[],"ext.maps"],["ext.maps.coord",1528811100,[],"ext.maps"],["ext.maps.resizable",1202225400,["jquery.ui.resizable"],"ext.maps"],["mapeditor",1528811100,["ext.maps.common","jquery.ui.autocomplete","jquery.ui.slider","jquery.ui.dialog"],"ext.maps"],["ext.maps.services",1528811100,["ext.maps.common","ext.maps.coord"],"ext.maps"],["ext.maps.googlemaps3",1528811100,["ext.maps.common"],"ext.maps"],["ext.maps.gm3.markercluster",1528811100,[],"ext.maps"],[
"ext.maps.gm3.markerwithlabel",1528811100,[],"ext.maps"],["ext.maps.gm3.geoxml",1528811100,[],"ext.maps/geoxml3"],["ext.maps.gm3.earth",1528811100,[],"ext.maps"],["ext.maps.openlayers",1528811100,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet",1528811100,["ext.maps.common"],"ext.maps"],["ext.maps.leaflet.fullscreen",1528811100,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.markercluster",1528811100,["ext.maps.leaflet"],"ext.maps"],["ext.maps.leaflet.providers",1528811100,["ext.maps.leaflet"],"ext.maps"]]);mw.config.set({"wgLoadScript":"/load.php","debug":!1,"skin":"oasis","stylepath":"https://slot1-images.wikia.nocookie.net/__cb1528890641/common/skins","wgUrlProtocols":"\\/\\/|ftp\\:\\/\\/|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|svn\\:\\/\\/|telnet\\:\\/\\/|worldwind\\:\\/\\/|xmpp\\:","wgArticlePath":"/wiki/$1","wgScriptPath":"","wgScriptExtension":".php","wgScript":"/index.php",
"wgVariantArticlePath":!1,"wgActionPaths":{},"wgServer":"http://left4dead.wikia.com","wgUserLanguage":"en","wgContentLanguage":"en","wgVersion":"1.19.24","wgEnableAPI":!0,"wgEnableWriteAPI":!0,"wgDefaultDateFormat":"mdy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgMonthNamesShort":["","Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"wgMainPageTitle":"Left 4 Dead Wiki","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Talk","2":"User","3":"User talk","4":"Left 4 Dead Wiki","5":"Left 4 Dead Wiki talk","6":"File","7":"File talk","8":"MediaWiki","9":"MediaWiki talk","10":"Template","11":"Template talk","12":"Help","13":"Help talk","14":"Category","15":"Category talk","110":"Forum","111":"Forum talk","500":"User blog","501":"User blog comment","502":"Blog","503":"Blog talk","828":"Module","829":"Module talk","1200":"Message Wall","1201":"Thread","1202":
"Message Wall Greeting"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"talk":1,"user":2,"user_talk":3,"left_4_dead_wiki":4,"left_4_dead_wiki_talk":5,"file":6,"file_talk":7,"mediawiki":8,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15,"forum":110,"forum_talk":111,"user_blog":500,"user_blog_comment":501,"blog":502,"blog_talk":503,"module":828,"module_talk":829,"message_wall":1200,"thread":1201,"message_wall_greeting":1202,"image":6,"image_talk":7,"project":4,"project_talk":5},"wgSiteName":"Left 4 Dead Wiki","wgFileExtensions":["png","gif","jpg","jpeg","ico","pdf","svg","odt","ods","odp","odg","odc","odf","odi","odm","ogg","ogv","oga"],"wgDBname":"left4dead","wgFileCanRotate":!0,"wgAvailableSkins":{"oasis":"Oasis","wikiamobile":"WikiaMobile"},"wgExtensionAssetsPath":"/extensions","wgCookiePrefix":"wikicities","wgResourceLoaderMaxQueryLength":-1,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":
" %!\"$\x26\'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgSassParams":{"background-dynamic":"false","background-image":"https://vignette3.wikia.nocookie.net/left4dead/images/5/50/Wiki-background/revision/latest?cb=20161023181610","background-image-height":"639","background-image-width":"2000","color-body":"#000000","color-body-middle":"#1c2729","color-buttons":"#003816","color-community-header":"#000000","color-header":"#920d0f","color-links":"#009900","color-page":"#000000","oasisTypography":1,"page-opacity":"100","widthType":0},"wgWikiaBaseDomain":"wikia.com","wgWikiaBaseDomainRegex":"(wikia\\.com|wikia-staging\\.com|wikia-dev\\.(com|us|pl))","wgRecommendedVideoABTestPlaylist":"","wgJSMessagesCB":"1528890641.0.0","wgVisualEditorConfig":{"disableForAnons":!1,"preferenceModules":{"visualeditor-enable-experimental":"ext.visualEditor.experimental","visualeditor-enable-language":"ext.visualEditor.language"},"namespaces":[0,2,14,4],"pluginModules":["ext.visualEditor.wikia.core"
],"defaultUserOptions":{"betatempdisable":0,"enable":1,"defaultthumbsize":180,"visualeditor-enable-experimental":0,"visualeditor-enable-language":0},"blacklist":{"msie":null,"android":[["\x3c",3]],"firefox":[["\x3c=",14]],"opera":[["\x3c",12]],"blackberry":null,"silk":null},"skins":["oasis","venus"],"tabPosition":"before","tabMessages":{"edit":null,"editsource":"visualeditor-ca-classiceditor","create":null,"createsource":"visualeditor-ca-classiceditor","editlocaldescriptionsource":"visualeditor-ca-editlocaldescriptionsource","createlocaldescriptionsource":"visualeditor-ca-createlocaldescriptionsource","editsection":null,"editsectionsource":"visualeditor-ca-editsource-section","editappendix":null,"editsourceappendix":null,"createappendix":null,"createsourceappendix":null,"editsectionappendix":null,"editsectionsourceappendix":null},"showBetaWelcome":!1,"enableTocWidget":!1},"wgCommunityPageDisableTopContributors":!1});mw.loader.state({"jquery":"ready"});window.preMwLdrSt&&mw.
loader.state(window.preMwLdrSt);if(window.preMwLdrStA){for(var i=0;i<window.preMwLdrStA.length;i++)mw.loader.state(window.preMwLdrStA[i]);};};if(isCompatible()){document.write("\x3cscript src=\"https://slot1-images.wikia.nocookie.net/__load/-/debug%3Dfalse%26lang%3Den%26only%3Dscripts%26skin%3Doasis%26version%3D1528890641-20180612T134500Z/jquery,mediawiki\"\x3e\x3c/script\x3e");}delete isCompatible;;

/* cache key: left4dead:resourceloader:filter:minify-js:7:60baf85b830ea2abf4b0587340c3934a */