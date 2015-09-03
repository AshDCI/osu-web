{{--
    Copyright 2015 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
<link rel="shortcut icon" href="{{ Config::get("osu.static", "//s.ppy.sh") }}/favicon.ico" type="image/vnd.microsoft.icon">
<link rel="icon" href="{{ Config::get("osu.static", "//s.ppy.sh") }}/favicon.ico" type="image/vnd.microsoft.icon">
<meta charset="utf-8">
<meta name="description" content="{{ $pageDescription or trans('layout.defaults.page_description') }}">
<meta name="keywords" content="osu, peppy, ouendan, elite, beat, agents, ds, windows, game, taiko, tatsujin, simulator, sim, xna, ddr, beatmania, osu!, osume">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="csrf-param" content="_token">
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="{{ elixir("js/bundle.js") }}" data-turbolinks-track></script>
<script src="{{ elixir("js/messages.js") }}" data-turbolinks-track></script>
<script src="{{ elixir("js/vendor.js") }}" data-turbolinks-track></script>
<script src="{{ elixir("js/app.js") }}" data-turbolinks-track></script>

<link href='//fonts.googleapis.com/css?family=Exo+2:300,300italic,200,400,400italic,500,500italic,700,700italic,900' rel='stylesheet' type='text/css'>

<link rel="stylesheet" media="all" href="{{ elixir("css/app.css") }}" data-turbolinks-track>
<link rel="stylesheet" media="all" href="/vendor/_photoswipe-default-skin/default-skin.css">

@if (isset($rss))
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="{{ $rss }}">
@endif

@if(config("services.ga.tracking_id") !== null)
	{{--
		Documentation: https://developers.google.com/analytics/devguides/collection/analyticsjs/
	--}}
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', '{{ config("services.ga.tracking_id") }}', 'auto');
	$(document).on('ready page:load', function() {
		ga('set', 'location', document.location.href);
		ga('send', 'pageview');
	});

	</script>
@endif
