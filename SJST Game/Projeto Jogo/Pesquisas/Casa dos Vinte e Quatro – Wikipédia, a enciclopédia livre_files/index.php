/*jshint strict: false, curly: false, boss: true */
/*global mw */

/**
 * Script para reescrever ligações externas para a Wikipédia (e outros projetos da Wikimedia)
 * de forma a continuarem a usar o servidor seguro (caso tenham feito login via https://pt.wikipedia.org)
 * desta forma não se é deslogado e reencaminhado para o não seguro quando se seguem links para diffs, etc.
 * @author: [[:en:User:TheDJ]]
 * @source: [[:en:MediaWiki:Common.js/secure new.js]] ([[en:Special:PermaLink/484771809]])
 */

function alwayssecurelinks2() {
        if( window.disableSecureLinks2===true) return;
	var re1 = /^http:\/\/(?:([a-z0-9\.\\-]+)\.)?(wik(?:i[mp]edia|tionary|isource|iquote|ibooks|inews|iversity|imediafoundation|ivoyage|idata)|mediawiki)\.org(\/[^?#]*)([#?].*|)$/i;
	
	var links = document.getElementsByTagName('a');
	for (var i = links.length; i--;) {
		var link = links[i], href = link.href;
		var m, main, sub, page, query;
		
		if (m = href.match(re1)) {
			main = m[2].toLowerCase();
			sub = m[1];
			page = m[3];
			query = m[4];
			
			if( main === 'mediawiki' ) {sub = main; main = 'wikipedia';}
			if( main === 'wikimediafoundation' ) {sub = 'foundation'; main = 'wikipedia';}
			if( main === 'wikisource' && !sub ) {main = 'wikipedia'; sub = 'sources';}

			if (sub === undefined) continue;
			sub = sub.toLowerCase();

			if (sub === 'www' || sub === 'mail' || sub === 'shop') continue;
			if (main === 'wikipedia') {
				if (sub.match(/^(download|mobile|.*?\.mobile|.*?\.m)$/)) {
					continue;
				}
			} else if (main === 'wikimedia') {
				if (sub.match(/^(etherpad|eiximenis|static|lists|upload|download|bugzilla|(tech|)blog|wikitech|svn|stats|volunteer|ticket|survey|dumps|noc|nyc|status|prototype|.*?planet|.*?donate)$/)) {
					continue;
				}
				
				if (!sub.match(/^(?:.{1,3}|.{1,3}?\..{1,3}|(?:.+?)\.labs)$/)) { // labs, regional wikimedias
					main = 'wikipedia'; // commons, meta, species, wikimania200x, many others
				}
			}
			
		} else continue;
		
		link.href = href.replace(  /^http:\/\//i, "//");
	}
}
mw.hook( 'wikipage.content' ).add( alwayssecurelinks2 );