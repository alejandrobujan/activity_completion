# Activity Completion Moodle Block

Moodle block which displays in the personal dashboard a global history/log of the users' activity completion, making the platform more engaging and showing who, when, and which activity has been completed, allowing the current user to ask them about it.

## Requirements

* [Moodle 3.11+](https://download.moodle.org/download.php/stable311/moodle-3.11.1.zip)
* MySQL / MariaDB / PostgreSQL
* [Custom Course Module](https://github.com/alejandrobujan/course)

## Installation

Assuming the requirements of the previous section have been met, there are two main ways to install this plugin:

### Graphical installation

* Go to Site administration->Plugins->Install plugins 
* Import this plugin as a ZIP file, you can download it [here](https://github.com/alejandrobujan/activity_completion/archive/refs/heads/master.zip).
![Installation as ZIP](doc/img/install_plugin_zip.png)
* Press "Install plugin from the ZIP file" button.

### CLI installation
In bash type the following commands:
```
cd blocks # Within your Moodle root
git clone https://github.com/alejandrobujan/activity_completion.git # Assuming you have installed Git tool
```
And then log in as admin user and go to Moodle notifications page if the installation wizard doesn't appear automatically.

See http://docs.moodle.org/en/Installing_plugins for more details on installing Moodle plugins

## Usage

After installing the plugin, it can be directly used by users and can be added to the personal dashboard. Every time an user mark an activity as done, a notification will appear in the block!
![Notifications](doc/img/notifications.png)

## Theme support

This plugin is developed and tested on Moodle Core's Boost theme and Academi theme. It should also work with Boost child themes, including Moodle Core's Classic theme. However, we can't support any other theme than Boost and Academi.

## Bug and problem reports

This plugin is carefully developed and thoroughly tested, but bugs and problems can always appear. We will do our best to solve problems, but please note that due to limited resources we can't always provide per-case support.

## Feature proposals

Due to limited resources, the functionality of this plugin is primarily implemented for our own local needs and published as-is to the community. We are aware that members of the community will have other needs and would love to see them solved by this plugin.

Please issue feature proposals on Github: https://github.com/alejandrobujan/activity_completion/issues

Please create pull requests on Github: https://github.com/alejandrobujan/activity_completion/pulls

We are always interested to read about your feature proposals or even get a pull request from you, but please accept that we can handle your issues only as feature proposals and not as feature requests.

## License

Copyright (C) 2021  Alejandro Buján Pampín

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.


