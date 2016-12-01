/**
 * Load modules for application
 */

angular

.module('voteApp', ['ui.router'])

.constant('CONFIG',
{
	DebugMode: true,
	StepCounter: 0,
	APIHost: 'http://localhost:12017'
});