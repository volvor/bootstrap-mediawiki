


var customizeToolbar = function() {
	/* Your code goes here */

	$( '#wpTextbox1' ).wikiEditor( 'addToToolbar', {
		'sections': {
			'quick-insert': {
				'type': 'booklet',
				'label': '快速插入'
			}
		}
	} );
	$( '#wpTextbox1' ).on( 'wikiEditor-toolbar-doneInitialSections', function () {
    	jQuery(".mw-editTools").detach().appendTo('#wikiEditor-section-quick-insert > div.pages');
    	jQuery("#wikiEditor-section-quick-insert > div.index").remove();
	} );

};

/* Check if view is in edit mode and that the required modules are available. Then, customize the toolbar … */
if ( $.inArray( mw.config.get( 'wgAction' ), [ 'edit', 'submit' ] ) !== -1 ) {
	mw.loader.using( 'user.options', function () {
		// This can be the string "0" if the user disabled the preference ([[phab:T54542#555387]])
		if ( mw.user.options.get( 'usebetatoolbar' ) == 1 ) {
			$.when(
				mw.loader.using( 'ext.wikiEditor.toolbar' ), $.ready
			).then( customizeToolbar );
		}
	} );
}

/**
 * EditTools support: add a selector, change <a> into buttons.
 * The special characters to insert are defined at [[MediaWiki:Edittools]].
 *
 * @author Arnomane, 2006 (on the commons.wikimedia.org/wiki/MediaWiki:Edittools.js)
 * @author Kaganer, 2007 (adapting to www.mediawiki.org)
 * @author Krinkle, 2012
 * @source www.mediawiki.org/wiki/MediaWiki:Gadget-Edittools.js
 * @revision 2012-02-29
 */
/*jslint browser: true*/
/*global jQuery, mediaWiki*/
(function ($, mw) {
	"use strict";
	var editFormSisyphus = $( "#editform" ).sisyphus( {
		locationBased: true, 
		timeout: 0,
		autoRelease: true,
		onBeforeRestore:function(){
		    $('#autoRestoreModal').modal({
		        keyboard: false,
				backdrop: 'static'
		    }); 
		    return false;
		}
	} ); 
	$( "#autoRestoreModal .btn-default, #autoRestoreModal .close, #mw-editform-cancel, #editform > div.wikiEditor-ui > div.wikiEditor-ui-controls > div.wikiEditor-ui-buttons > button:nth-child(2)").click(function(){
	    editFormSisyphus.manuallyReleaseData();
	});
	$( "#autoRestoreModal .btn-primary").click(function(){
	    editFormSisyphus.restoreAllData();
	    $('#autoRestoreModal').modal('hide');
	});

	var conf, editTools, $sections;

	conf = {
		initialSubset: window.EditTools_initial_subset === undefined ? window.EditTools_initial_subset : 0
	};

	editTools = {

		/**
		 * Creates the selector
		 */
		setup: function () {
			var $container, $select, initial;

			$container = $('#mw-edittools-charinsert');
			if (!$container.length) {
				return;
			}
			$sections = $container.find('.mw-edittools-section');
			if ($sections.length <= 1) {
				// Only care if there is more than one
				return;
			}

			$select = $('<select>').css('display', 'inline');

			initial = conf.initialSubset;
			if (isNaN(initial) || initial < 0 || initial >= $select.length) {
				initial = 0;
			}

			$sections.each(function (i, el) {
				var $section, sectionTitle, $option;

				$section = $(el);
				sectionTitle = $section.data('sectionTitle');

				$option = $('<option>')
					.text(sectionTitle)
					.prop('value', i)
					.prop('selected', i === initial);

				$select.append($option);
			});

			$select.change(editTools.handleOnchange);
			$container.prepend($select);

			editTools.chooseSection(initial);
		},

		/**
		 * Handle onchange event of the <select>
		 *
		 * @context {Element}
		 * @param e {jQuery.Event}
		 */
		handleOnchange: function () {
			editTools.chooseSection(Number($(this).val()));

			return true;
		},

		/**
		 * Toggle the currently visible section
		 *
		 * @param sectionNr {Number}
		 * @param setFocus {Boolean}
		 */
		chooseSection: function (sectionNr) {
			var $choise = $sections.eq(sectionNr);
			if ($choise.length !== 1) {
				return;
			}

			// Making these buttons is a little slow,
			// If we made them all at once the browser would hang
			// for over 2 seconds, so instead we're doing it on-demand
			// for each section. No need to do it twice thoguh, so remember
			// in data whether it was done already
			if (!$choise.data('charInsert.buttonsMade')) {
				$choise.data('charInsert.buttonsMade', true);
				editTools.makeButtons($choise);
			}

			$choise.show();
			$sections.not($choise).hide();
		},

		/**
		 * Convert the <a onclick> links to buttons in a given section.
		 *
		 * @param $section {jQuery}
		 */
		makeButtons: function ($section) {
			var $links;

			if (!$section.length) {
				return;
			}

			$links = $section.find('a');
			$links.each(function (i, a) {
				var $a, button;
				$a = $(a);
				button = document.createElement('input');
				button.type = 'button';
				button.onclick = a.onclick;
				button.value = $a.text();
				button.className = 'keep';
				$a.replaceWith(button);
			});
		}

	};

	$(document).ready(editTools.setup);

}(jQuery, mediaWiki));