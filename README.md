## Please Wait Plugin

A simple library to show your users a beautiful splash page while your application loads.

###### Adaptation of the [PleaseWait.js](http://pathgather.github.io/please-wait/) plugin and the [SpinKit](http://tobiasahlin.com/spinkit/) library for OctoberCMS.

### Features

* Ready in just 3 steps!
* You can:
  * Select a spin provided by [SpinKit](http://tobiasahlin.com/spinkit/).
  * Change the logo
  * Write a phrase
  * Change the spin color
  * Change the phrase color
  * Change the background color
* Compatible with the [Translate](https://octobercms.com/plugin/rainlab-translate) plugin.
* Available locales:
  - en
  - es

### Usage

1. **Install** the Plugin.

2. **Activate it** in the `Settings` area.

3. **Add the `Component`** to your `Layout` just before the `{% scripts %}` tag.

##### **Important**: You must include the tags `{% styles %}` and `{% scripts %}` in your `Layout`.

##### **Optional**: Hide initial HTML flash

If your initial template has some styled HTML by default (like a toolbar), you'll probably want to hide that, or your users could see a quick flash of your normal template, followed by the loading screen. This is easy to do by wrapping the HTML in your body in a div, and hiding/showing that when things are ready. PleaseWait adds a class of 'pg-loaded' to your <body> when it's done.

    <style>
        body > .inner {
          display: none;
        }

        body.pg-loaded > .inner {
          display: block;
        }
    </style>
