;(function($, window, document, undefined){

	'use strict';

	var $qaQuestions, $qaAnswers, $qaIcons,
		$teaserMessages, $teaserHiddenContents, $teaserIcons;

	var init = function() {
		$qaQuestions = $('.qa--question');
		$qaAnswers = $qaQuestions.next();
		$qaIcons = $qaQuestions.find('.qa--icon');

		$qaQuestions.on('click', {contentType: 'qa'}, clickHandler);

		$teaserMessages = $('.teaser--visible-message');
		$teaserHiddenContents = $teaserMessages.next();
		$teaserIcons = $teaserMessages.find('.teaser--icon');

		$teaserMessages.on('click', {contentType: 'teaser'}, clickHandler);
	} 

	/**
	 * Click event handler
	 *
	 * @param event
	 *
	 */
	var clickHandler = function( event ){
		console.log( event.data );

	}

	/*******************
	 * Helper Functions
	 *******************/

	/**
	 * Change the Icon Handler
	 */
	 function changeIcon(){

	 }

	/**
	 * Get the element index number
	 */
	 function getIndex(){

	 }



	$(document).ready(function(){
		init();

		console.log(collapsibleContentParameters);
	});

})(jQuery, window, document);