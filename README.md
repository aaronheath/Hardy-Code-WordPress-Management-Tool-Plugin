# WordPress Management Tool Plugin

The WordPress Management Tool (WPMT) by Hardy Code is designed to assist those that are responsible for multiple installations of WordPress around the net.
			        
All an administrator has to do is install the WPMT plugin, sign up for the Hardy Code Tools and register the generated Site Key.

It's as simple as can be!

## How much does this cost?

Short Answer: Free (for now)!

Long Answer: Whilst we all like to make some money, this product is still, in our minds, in beta. At this stage we feel the service should prove itself before we charge for it. This doesn't mean that we will charge for it once it's a proven service, it just means that we might.

## How do we capture information about a site?

First of all let's get it out there that we wouldn't have build this service unless we were able to make it secure.

Here is how the plugin transmits site information to the Hardy Code servers:

* Upon plugin installation and activation, the plugin will transmit one set of information about the site to the Hardy Code servers.
* Once a site is registered with the Hardy Code servers, the server will periodically poll the plugin for site information. If multiple Hardy Code users have the site registered as a part of their profile, all users must deactivate their registration for the polling to cease.
* The plugin will only respond to polling requests if it's activate. Want to stop it from sending information? De-activate the plugin.

## Exactly what information does the plugin send?

The plugin sends the following information to the Hardy Code servers:

* Site Name
* Site URL
* WordPress Build
* List of installed plugins
* List of installed plugins versions
* List of installed plugins summary information
* Name of the current theme
* Version of the current theme
* The servers IP Address
* Total disk space
* Used Disk space

All this information is transmitted to the Hardy Code servers using a secure SSL connection.

## Installation

* [Download](https://github.com/aaronheath/WPMTPlugin/archive/master.zip) the plugin.
* Upload the plugin to the /wp-content/plugins/ directory.
* Activate the plugin through the Plugins menu in WordPress.

## Changelog

* v0.0.4
 * Initial Release
* v0.0.5
 * Now using xml-rpc for API
 * Removed includes of core WordPress files.

## Feedback or Issues

Please feel free to lodge issues using the GitHub issues interface. Should you wish to provide direct feedback please email me at [aaron@hardycode.com.au](mailto:aaron@hardycode.com.au).