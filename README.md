# DevriX WordPress Setup

This is an example `README.md` file, which we are using when we create a new project setup. The details in this repository are representing the usual setup, details and all important details for the project.

The repository can be used as an example repository for a new project and it will be improved over the time.

___


# [Project Name] Repository
A short description of the [Project Name] here.

Live site is located at [projectname.com](https://projectname.com)

## Setup Details
Get all details and download the Database from [Project Name Setup, GitHub Details, Database dump and Media export](#) task in Asana, clone the repository and follow the details from below.

Copy `wp-config-local-sample.php` file to `wp-config-local.php` and add your localhost details there.

You might have to update the `siteurl` and `home` value in `$wpdb->options` table with your localhost URL. If you have WP-CLI, you can use [wp search-replace](https://wp-cli.org/commands/search-replace/).

The database `$table_prefix` is set to `wp_` (this is different and it depends on the project), keep that in mind.

The default localhost Dashboard access is `adminusernamehere` with password `adminpasswordhere`. If you have WP-CLI, you can use [wp user create](https://wp-cli.org/commands/user/create/).

If you want to skip the media import/download, you can use this really cool plugin - [BE Media from Production](https://github.com/billerickson/BE-Media-from-Production). There is a big chance, the plugin has been already added to the repository and already configured. Check for this one, before you setup it on your end.

## Git Branching
We are using different featured, bugfix, styling, etc branches when it comes to building new features. However, you should keep in mind two things: `master` branch is the current production state and the `develop` branch is the current state of the staging server. Also, the `develop` branch is our main branch.
When you create a new branch, create it from the `develop` branch.

## Add more specific details for [Project Name] here
The details will be placed here
