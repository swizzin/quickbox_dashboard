$(document).ready(function() {

  /////////////////////////////////////////////
  // BEGIN AJAX APP CALLS ON SERVICE STATUS //
  ///////////////////////////////////////////
  // <<-------- BAZARR -------->> //
  function appstat_bazarr() {
    $.ajax({url: "widgets/app_status/app_status_bazarr.php", cache:false, success: function (result) {
      $('#appstat_bazarr').html(result);
      setTimeout(function(){appstat_bazarr()}, 5000);
    }});
  }
  appstat_bazarr();

  // <<-------- BTSYNC -------->> //
  function appstat_btsync() {
    $.ajax({url: "widgets/app_status/app_status_btsync.php", cache:false, success: function (result) {
      $('#appstat_btsync').html(result);
      setTimeout(function(){appstat_btsync()}, 5000);
    }});
  }
  appstat_btsync();

  // <<-------- COUCHPOTATO -------->> //
  function appstat_couchpotato() {
    $.ajax({url: "widgets/app_status/app_status_couchpotato.php", cache:false, success: function (result) {
      $('#appstat_couchpotato').html(result);
      setTimeout(function(){appstat_couchpotato()}, 5000);
    }});
  }
  appstat_couchpotato();

  // <<-------- DELUGED -------->> //
  function appstat_deluged() {
    $.ajax({url: "widgets/app_status/app_status_deluged.php", cache:false, success: function (result) {
      $('#appstat_deluged').html(result);
      setTimeout(function(){appstat_deluged()}, 5000);
    }});
  }
  appstat_deluged();

  // <<-------- DELUGE WEB -------->> //
  function appstat_delugeweb() {
    $.ajax({url: "widgets/app_status/app_status_delugeweb.php", cache:false, success: function (result) {
      $('#appstat_delugeweb').html(result);
      setTimeout(function(){appstat_delugeweb()}, 5000);
    }});
  }
  appstat_delugeweb();

  // <<-------- EMBY -------->> //
  function appstat_emby() {
    $.ajax({url: "widgets/app_status/app_status_emby.php", cache:false, success: function (result) {
      $('#appstat_emby').html(result);
      setTimeout(function(){appstat_emby()}, 5000);
    }});
  }
  appstat_emby();

  // <<-------- FLOOD -------->> //
  function appstat_flood() {
    $.ajax({url: "widgets/app_status/app_status_flood.php", cache:false, success: function (result) {
      $('#appstat_flood').html(result);
      setTimeout(function(){appstat_flood()}, 5000);
    }});
  }
  appstat_flood();

  // <<-------- FILEBROWSER -------->> //
  function appstat_filebrowser() {
    $.ajax({url: "widgets/app_status/app_status_filebrowser.php", cache:false, success: function (result) {
      $('#appstat_filebrowser').html(result);
      setTimeout(function(){appstat_filebrowser()}, 5000);
    }});
  }
  appstat_filebrowser();

  // <<-------- HEADPHONES -------->> //
  function appstat_headphones() {
    $.ajax({url: "widgets/app_status/app_status_headphones.php", cache:false, success: function (result) {
      $('#appstat_headphones').html(result);
      setTimeout(function(){appstat_headphones()}, 5000);
    }});
  }
  appstat_headphones();

  // <<-------- IRSSI -------->> //
  function appstat_irssi() {
    $.ajax({url: "widgets/app_status/app_status_irssi.php", cache:false, success: function (result) {
      $('#appstat_irssi').html(result);
      setTimeout(function(){appstat_irssi()}, 5000);
    }});
  }
  appstat_irssi();

  // <<-------- JACKETT -------->> //
  function appstat_jackett() {
    $.ajax({url: "widgets/app_status/app_status_jackett.php", cache:false, success: function (result) {
      $('#appstat_jackett').html(result);
      setTimeout(function(){appstat_jackett()}, 5000);
    }});
  }
  appstat_jackett();

  // <<-------- JELLYFIN -------->> //
  function appstat_jellyfin() {
    $.ajax({url: "widgets/app_status/app_status_jellyfin.php", cache:false, success: function (result) {
      $('#appstat_jellyfin').html(result);
      setTimeout(function (){appstat_jellyfin()}, 5000);
    }});
  }
  appstat_jellyfin();

  // <<-------- LIDARR -------->> //
  function appstat_lidarr() {
    $.ajax({url: "widgets/app_status/app_status_lidarr.php", cache:false, success: function (result) {
      $('#appstat_lidarr').html(result);
      setTimeout(function(){appstat_lidarr()}, 5000);
    }});
  }
  appstat_lidarr();  

  // <<-------- THE LOUNGE -------->> //
  function appstat_lounge() {
    $.ajax({url: "widgets/app_status/app_status_lounge.php", cache:false, success: function (result) {
      $('#appstat_lounge').html(result);
      setTimeout(function(){appstat_lounge()}, 5000);
    }});
  }
  appstat_lounge();

  // <<-------- MEDUSA -------->> //
  function appstat_medusa() {
    $.ajax({url: "widgets/app_status/app_status_medusa.php", cache:false, success: function (result) {
      $('#appstat_medusa').html(result);
      setTimeout(function(){appstat_medusa()}, 5000);
    }});
  }
  appstat_medusa();

  // <<-------- NETDATA -------->> //
  function appstat_netdata() {
    $.ajax({url: "widgets/app_status/app_status_netdata.php", cache:false, success: function (result) {
      $('#appstat_netdata').html(result);
      setTimeout(function(){appstat_netdata()}, 5000);
    }});
  }
  appstat_netdata();

  // <<-------- NEXTCLOUD -------->> //
  function appstat_nextcloud() {
    $.ajax({url: "widgets/app_status/app_status_nextcloud.php", cache:false, success: function (result) {
      $('#appstat_nextcloud').html(result);
      setTimeout(function(){appstat_nextcloud()}, 5000);
    }});
  }
  appstat_nextcloud();

  // <<-------- NZBGET -------->> //
  function appstat_nzbget() {
    $.ajax({url: "widgets/app_status/app_status_nzbget.php", cache:false, success: function (result) {
      $('#appstat_nzbget').html(result);
      setTimeout(function(){appstat_nzbget()}, 5000);
    }});
  }
  appstat_nzbget();

  // <<-------- NZBHYDRA -------->> //
  function appstat_nzbhydra() {
    $.ajax({url: "widgets/app_status/app_status_nzbhydra.php", cache:false, success: function (result) {
      $('#appstat_nzbhydra').html(result);
      setTimeout(function(){appstat_nzbhydra()}, 5000);
    }});
  }
  appstat_nzbhydra();

  // <<-------- OMBI -------->> //
  function appstat_ombi() {
    $.ajax({url: "widgets/app_status/app_status_ombi.php", cache:false, success: function (result) {
      $('#appstat_ombi').html(result);
      setTimeout(function(){appstat_ombi()}, 5000);
    }});
  }
  appstat_ombi();

  // <<-------- OPENVPN -------->> //
  function appstat_openvpn() {
    $.ajax({url: "widgets/app_status/app_status_openvpn.php", cache:false, success: function (result) {
      $('#appstat_openvpn').html(result);
      setTimeout(function(){appstat_openvpn()}, 5000);
    }});
  }
  appstat_openvpn();

  // <<-------- PLEX -------->> //
  function appstat_plex() {
    $.ajax({url: "widgets/app_status/app_status_plex.php", cache:false, success: function (result) {
      $('#appstat_plex').html(result);
      setTimeout(function(){appstat_plex()}, 5000);
    }});
  }
  appstat_plex();

  // <<-------- TAUTULLI -------->> //
  function appstat_tautulli() {
    $.ajax({url: "widgets/app_status/app_status_tautulli.php", cache:false, success: function (result) {
      $('#appstat_tautulli').html(result);
      setTimeout(function(){appstat_tautulli()}, 5000);
    }});
  }
  appstat_tautulli();

  // <<-------- PYLOAD -------->> //
  function appstat_pyload() {
    $.ajax({url: "widgets/app_status/app_status_pyload.php", cache:false, success: function (result) {
      $('#appstat_pyload').html(result);
      setTimeout(function(){appstat_pyload()}, 5000);
    }});
  }
  appstat_pyload();

  // <<-------- QUASSEL -------->> //
  function appstat_quassel() {
    $.ajax({url: "widgets/app_status/app_status_quassel.php", cache:false, success: function (result) {
      $('#appstat_quassel').html(result);
      setTimeout(function(){appstat_quassel()}, 5000);
    }});
  }
  appstat_quassel();

  // <<-------- RADARR -------->> //
  function appstat_radarr() {
    $.ajax({url: "widgets/app_status/app_status_radarr.php", cache:false, success: function (result) {
      $('#appstat_radarr').html(result);
      setTimeout(function(){appstat_radarr()}, 5000);
    }});
  }
  appstat_radarr();

  // <<-------- RAPIDLEECH -------->> //
  function appstat_rapidleech() {
    $.ajax({url: "widgets/app_status/app_status_rapidleech.php", cache:false, success: function (result) {
      $('#appstat_rapidleech').html(result);
      setTimeout(function(){appstat_rapidleech()}, 5000);
    }});
  }
  appstat_rapidleech();

  // <<-------- RTORRENT -------->> //
  function appstat_rtorrent() {
    $.ajax({url: "widgets/app_status/app_status_rtorrent.php", cache:false, success: function (result) {
      $('#appstat_rtorrent').html(result);
      setTimeout(function(){appstat_rtorrent()}, 5000);
    }});
  }
  appstat_rtorrent();

  // <<-------- SABNZBD -------->> //
  function appstat_sabnzbd() {
    $.ajax({url: "widgets/app_status/app_status_sabnzbd.php", cache:false, success: function (result) {
      $('#appstat_sabnzbd').html(result);
      setTimeout(function(){appstat_sabnzbd()}, 5000);
    }});
  }
  appstat_sabnzbd();

  // <<-------- SICKGEAR -------->> //
  function appstat_sickgear() {
    $.ajax({url: "widgets/app_status/app_status_sickgear.php", cache:false, success: function (result) {
      $('#appstat_sickgear').html(result);
      setTimeout(function(){appstat_sickgear()}, 5000);
    }});
  }
  appstat_sickgear();

  // <<-------- sickchill -------->> //
  function appstat_sickchill() {
    $.ajax({url: "widgets/app_status/app_status_sickchill.php", cache:false, success: function (result) {
      $('#appstat_sickchill').html(result);
      setTimeout(function(){appstat_sickchill()}, 5000);
    }});
  }
  appstat_sickchill();

  // <<-------- SONARR -------->> //
  function appstat_sonarr() {
    $.ajax({url: "widgets/app_status/app_status_sonarr.php", cache:false, success: function (result) {
      $('#appstat_sonarr').html(result);
      setTimeout(function(){appstat_sonarr()}, 5000);
    }});
  }
  appstat_sonarr();

  // <<-------- SUBSONIC -------->> //
  function appstat_subsonic() {
    $.ajax({url: "widgets/app_status/app_status_subsonic.php", cache:false, success: function (result) {
      $('#appstat_subsonic').html(result);
      setTimeout(function(){appstat_subsonic()}, 5000);
    }});
  }
  appstat_subsonic();

  // <<-------- SYNCTHING -------->> //
  function appstat_syncthing() {
    $.ajax({url: "widgets/app_status/app_status_syncthing.php", cache:false, success: function (result) {
      $('#appstat_syncthing').html(result);
      setTimeout(function(){appstat_syncthing()}, 5000);
    }});
  }
  appstat_syncthing();

  // <<-------- WEB CONSOLE -------->> //
  function appstat_webconsole() {
    $.ajax({url: "widgets/app_status/app_status_webconsole.php", cache:false, success: function (result) {
      $('#appstat_webconsole').html(result);
      setTimeout(function(){appstat_webconsole()}, 5000);
    }});
  }
  appstat_webconsole();

  // <<-------- X2GO -------->> //
  function appstat_x2go() {
    $.ajax({url: "widgets/app_status/app_status_x2go.php", cache:false, success: function (result) {
      $('#appstat_x2go').html(result);
      setTimeout(function(){appstat_x2go()}, 5000);
    }});
  }
  appstat_x2go();

  // <<-------- ZNC -------->> //
  function appstat_znc() {
    $.ajax({url: "widgets/app_status/app_status_znc.php", cache:false, success: function (result) {
      $('#appstat_znc').html(result);
      setTimeout(function(){appstat_znc()}, 5000);
    }});
  }
  appstat_znc();
  

  ///////////////////////////////////////////
  // END AJAX APP CALLS ON SERVICE STATUS //
  /////////////////////////////////////////

  function uptime() {
    $.ajax({url: "widgets/up.php", cache:true, success: function (result) {
      $('#uptime').html(result);
      setTimeout(function(){uptime()}, 1000);
    }});
  }
  uptime();

  function sload() {
    $.ajax({url: "widgets/load.php", cache:true, success: function (result) {
      $('#cpuload').html(result);
      setTimeout(function(){sload()}, 15000);
    }});
  }
  sload();

  function bwtables() {
    $.ajax({url: "widgets/bw_tables.php", cache:false, success: function (result) {
      $('#bw_tables').html(result);
      setTimeout(function(){bwtables()}, 60000);
    }});
  }
  bwtables();

  function diskstats() {
    $.ajax({url: "widgets/disk_data.php", cache:false, success: function (result) {
      $('#disk_data').html(result);
      setTimeout(function(){diskstats()}, 15000);
    }});
  }
  diskstats();

  function ramstats() {
    $.ajax({url: "widgets/ram_stats.php", cache:false, success: function (result) {
      $('#meterram').html(result);
      setTimeout(function(){ramstats()}, 15000);
    }});
  }
  ramstats();

  function activefeed() {
    $.ajax({url: "widgets/activity_feed.php", cache:false, success: function (result) {
      $('#activityfeed').html(result);
      setTimeout(function(){activefeed()}, 300000);
    }});
  }
  activefeed();

  function msgoutput() {
    $.ajax({url: "db/output.log", cache:false, success: function (result) {
      $('#sshoutput').html(result);
      setTimeout(function(){msgoutput()}, 1000);
    }});
    jQuery( function(){
      var pre = jQuery("#sysPre");
      pre.scrollTop( pre.prop("scrollHeight") );
    });
  }
  msgoutput();

  });
  //success: function (result)
