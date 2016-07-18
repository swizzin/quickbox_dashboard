<?php

////////////////////////////////////////
//DASHBOARD MENU
///////////////////////////////////////

// main menu tab
$L['MAIN_MENU'] = 'Menu Principal';
$L['DOWNLOADS'] = 'Téléchargements';
$L['WEB_CONSOLE'] = 'Console Web';

// plugin menu tab
$L['PLUGIN_MENU'] = 'Menu Plugins';
$L['PMENU_NOTICE_TXT'] = 'Installez et désinstallez facilement les plugins ruTorrent en cliquant simplement sur le nom du plugin';

// quick help menu tab
$L['QUICK_SYSTEM_TIPS'] = 'Astuces';
$L['DISKTEST_TXT'] = 'Tapez cette commande pour effectuer un rapide test de lecture/écriture sur votre disque.';
$L['FIXHOME_TXT'] = 'Tapez cette commande pour ajuster rapidement les permissions du dossier /home.';
// admin commands section
$L['ADMIN_COMMANDS'] = 'Commandes Administrateur';
$L['SETDISK_TXT'] = 'Tapez cette commande en ssh pour allouer this command in ssh la quantité d\' espace disque que vous souhaitez donner à un utilisateur.';
$L['CREATESEEDBOXUSER_TXT'] = 'Tapez cette commande en ssh pour créer un nouvel utilisateur sur votre seedbox.';
$L['DELETESEEDBOXUSER_TXT'] = 'Tapez cette commande en ssh pour supprimer un utilisateur de votre seedbox. Vous devrez entrer son nom.';
$L['CHANGEUSERPASS_TXT'] = 'Tapez cette commande en ssh vous permet de changer les mot de passe des utilisateurs..';
$L['SHOWSPACE_TXT'] = 'Utilisez cette commande en tant que root pour voir l’espace disque actuellement utilisé par chaque utilisateur.';
$L['UPGRADEBTSYNC_TXT'] = 'Tapez cette commande en ssh pour mettre à jour BTSync vers la nouvelle version quand elle sera disponible.';
$L['UPGRADEPLEX_TXT'] = 'Tapez cette commande en SSH pour mettre à jour Plex vers la nouvelle version quand elle sera disponible.';
$L['UPGRADEDELUGE_TXT'] = 'Tapez cette commande en SSH pour mettre à jour Deluge vers la nouvelle version quand elle sera disponible.';
$L['CLEAN_MEM_TXT'] = 'Tapez cette commande en tant que root si/quand vous décidez de nettoyer le cache de Mémoire Physique.';
// essential user commands section
$L['ESSENTIAL_USER_COMMANDS'] = 'Commandes utilisateur essentielles';
$L['RELOAD_TXT'] = 'Autorise l’utilisateur à recharger ses services (rTorrent et IRSSI).';
$L['SCREEN_RTORRNENT_TXT'] = 'Autorise l’utilisateur à redémarrer/remonter rTorrent en ssh';
$L['SCREEN_IRSSI_TXT'] = 'Autorise l’utilisateur à redémarrer/remonter IRSSI en ssh';


////////////////////////////////////////
//DASHBOARD WIDGET TITLES
///////////////////////////////////////

// restart services widget
$L['RESTART_SERVICES'] = 'Redémarrer mes Services';

// service controller widget
$L['ENABLE_DISABLE_SERVICES'] = 'Activer/Désactiver mes Services';

// package management center widget
$L['PACKAGE_MANAGEMENT_CENTER'] = 'Centre de gestion des Packages';

// bandwidth data widget
$L['BANDWIDTH_DATA'] = 'Bande Passante';

// disk status widget
$L['YOUR_DISK_STATUS'] = 'Statut Du Disque';

// memory status widget
$L['SYSTEM_RAM_STATUS'] = 'Statut mémoire RAM';

// cpu status widget
$L['CPU_STATUS'] = 'Statut CPU';

// server load widget
$L['SERVER_LOAD'] = 'Charge Serveur';


////////////////////////////////////////
//PACKAGE MANAGEMENT CENTER
///////////////////////////////////////

// package management center notice
$L['PMC_NOTICE_TXT'] = '<strong>Attention!</strong> S\'il vous plaît, notez que ces options ne sont pas les mêmes que pour l\'activation et la désactivation d\'un logiciel. Ces options sont conçues uniquement pour les installer ou désinstaller.';

// package management center column headers
$L['NAME'] = 'Nom';
$L['DETAILS'] = 'Détails';
$L['AVAILABILITY'] = 'Disponibilité';

// packages
$L['BTSYNC_DETAILS'] = 'BitTorrent Sync par BitTorrent.Inc est un outil propriétaire peer-to-peer de synchronisation de fichiers.';
$L['COUCHPOTATO'] = 'Téléchargez automatiquement des films, facilement et dans la meilleure qualité dès qu\'ils sont libérés, par l\'intermédiaire d\'Usenet ou de torrents.';
$L['DELUGE'] = 'Deluge est un client BitTorrent léger, gratuit et multi-plateforme.';
$L['JACKETT'] = 'Support API pour vos trackers privés préférés.';
$L['PLEX'] = 'Plex vous permet de diffuser votre contenu à tous vos dispositifs Plex activés.';
$L['PLEX_REQUESTS'] = 'Plex Requests offre une belle interface pour que vos utilisateurs vous demandent facilement d\'ajouter de nouveaux films à la bibliothèque. S\'intègre avec CouchPotato, SickRage et Sonarr.';
$L['PLEXPY'] = 'Une application web python conçue pour la surveillance, l\'analyse et les notifications de Plex Media Server';
$L['QUASSEL'] = 'Quassel est un client IRC multi-plateforme moderne basé sur le framework Qt4.';
$L['QUOTAS'] = 'Cette fonctionnalité de Linux permet à l\'administrateur du système d\'allouer un montant maximum de l\'espace disque d\'un utilisateur.';
$L['RAPIDLEECH'] = 'Rapid Leech est un script de transfert de serveur gratuit pour une utilisation sur différents sites de Direct Download populaires tels que uploaded.net, rapidshare.com et plus de 120 autres.';
$L['SICKRAGE'] = 'Gestionnaire de fichiers vidéo pour Séries TV. Il surveille les nouveaux épisodes de vos émissions préférées et quand ils sont postés, sa magie entre en jeu.';
$L['SONARR'] = 'Sonarr est un outil de gestion de Séries TV qui travaillera avec les torrents et liens Usenet.';
$L['X2GO'] = 'X2Go est un logiciel de bureau à distance open source pour Linux qui utilise le protocole de technologie NX.';
$L['ZNC'] = 'ZNC est un bouncer IRC sous licence GPL. Celui-ci sera connecté en permanence à vos salons de discussions et fera office de passerelle entre votre client et vos serveurs IRC.';

// package management center buttons
$L['INSTALL'] = 'Installer';
$L['INSTALLED'] = 'Installé';
$L['QBPM'] = 'QBPM requis';

////////////////////////////////////////
//BANDWIDTH & DATA TABLES
///////////////////////////////////////

// column headers and dropdown toggle button
$L['NETWORK'] = 'Réseau';
$L['UPLOAD'] = 'Upload';
$L['DOWNLOAD'] = 'Download';
$L['VIEW_ADDITIONAL_BANDWIDTH_DETAILS'] = 'Voir les détails additionnels';

// main table headers
$L['Summary'] = 'Sommaire';
$L['Top 10 days'] = 'Les 10 meilleurs jours';
$L['Last 24 hours'] = 'Dernières 24 heures';
$L['Last 30 days'] = 'Derniers 30 jours';
$L['Last 12 months'] = 'Les 12 derniers mois';

// traffic table columns
$L['In'] = 'Entrant';
$L['Out'] = 'Sortant';
$L['Total'] = 'Total';

// summary rows
$L['This hour'] = 'Cette Heure';
$L['This day'] = 'Aujourd\' hui';
$L['This month'] = 'Ce Mois-ci';
$L['All time'] = 'Au Total';

// date formats
$L['datefmt_days'] = '%d %B';
$L['datefmt_days_img'] = '%d';
$L['datefmt_months'] = '%B %Y';
$L['datefmt_months_img'] = '%b';
$L['datefmt_hours'] = '%l%p';
$L['datefmt_hours_img'] = '%l';
$L['datefmt_top'] = '%d %B %Y';


////////////////////////////////////////
//DISK STATUS WIDGET
///////////////////////////////////////

$L['FREE'] = 'Libre';
$L['USED'] = 'Utilisé';
$L['SIZE'] = 'Taille';
$L['DISK_SPACE'] = 'Espace Disque';
$L['PERCENTAGE_TXT'] = 'Vous avez utilisé "$perused" de votre espace disque total';
$L['RTORRENTS_TITLE'] = 'Torrents dans rTorrent';
$L['RT_TXT'] = 'Il y a !x torrents chargés.';
$L['DTORRENTS_TITLE'] = 'Torrents dans Deluge';
$L['D_TXT'] = 'Il y a !x torrents chargés.';


////////////////////////////////////////
//SYSTEM RAM STATUS WIDGET
///////////////////////////////////////

// physical memory
$L['PHYSICAL_MEMORY_TITLE'] = 'Utilisation de la Mémoire Physique';
$L['PHYSICAL_MEMORY_USED_TXT'] = 'Utilisé';
$L['PHYSICAL_MEMORY_IDLE_TXT'] = 'Libre';

//cached memory
$L['CACHED_MEMORY_TITLE'] = 'Utilisation de la Mémoire Cache';
$L['CACHED_MEMORY_USAGE_TXT'] = 'Mémoire cache utilisée à';
$L['CACHED_MEMORY_BUFFERS_TXT'] = 'Mémoire tampon est à';

// real memory
$L['REAL_MEMORY_TITLE'] = 'Utilisation de la Mémoire Réelle';
$L['REAL_MEMORY_USAGE_TXT'] = 'Mémoire Réelle utilisée';
$L['REAL_MEMORY_FREE_TXT'] = 'Mémoire Réelle libre';

// swap usage
$L['SWAP_TITLE'] = 'Utilisation Swap';
$L['SWAP_TOTAL_TXT'] = 'Zone SWAP';
$L['SWAP_USED_TXT'] = 'Utilisé';
$L['SWAP_IDLE_TXT'] = 'Libre';

// total ram
$L['TOTAL_RAM'] = 'RAM Totale du Système';

// clean mem button
$L['CLEAR_CACHE'] = 'Nettoyer le cache Mémoire';


////////////////////////////////////////
//CPU STATUS WIDGET
///////////////////////////////////////

// used percentage
$L['CPU_USED'] = 'Utilisé';

// idle percentage
$L['CPU_IDLE'] = 'Libre';

// cpu info
$L['FREQUENCY'] = 'Fréquence:';
$L['SECONDARY'] = 'Cache Secondaire:';


////////////////////////////////////////
//SERVER LOAD WIDGET
///////////////////////////////////////

$L['SL_TXT'] = 'Ceci est la moyenne de charge de votre serveur';
$L['UPTIME'] = 'Uptime';




// SAMPLE
// $L['SAMPLE'] = 'Sample';