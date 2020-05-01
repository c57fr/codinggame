<?php

echo 'Définition des couleurs de l\'éditeur VSC (Todo Tree)';

// 2do À mettre ds c57.fr
// 2do Y compris settings.json de VSC (Win)

//////////////////////////////////////////////////////////////
//      Impliquent une action à faire d'urgence (Max 21)    //
//////////////////////////////////////////////////////////////

// 2dbug À débuger     (rouge vif)
// 2fix  À rêgler      (Jaune vif)
// -----------------
// 2do   À faire       (orange vif)
// dès que possible
// -----------------
// 2ar   À améliorer   (cyan)
//        À revoir
// dès que plus du tout de 2do

// Dans Setting.json

/*

"todo-tree.general.tags": [
  "2dbug",
  "2fix",
  "2do",
  "2ar"
  ],
  "todo-tree.highlights.highlightDelay": 1500,
  // "todo-tree.highlights.highlightDelay": 1000,
  "todo-tree.highlights.defaultHighlight": {
  "foreground": "blue",
  "type": "none"
  },
  "todo-tree.highlights.customHighlight": {
  "2dbug": {
  "icon": "check",
  "type": "line",
  "foreground": "#FF0000",
  "iconColour": "#FF0000"
  },
  "2fix": {
  "icon": "check",
  "type": "line",
  "foreground": "#FF0",
  "iconColour": "yellow"
  },
  "2do": {
  "icon": "check",
  "type": "line",
  "foreground": "#ffa500",
  "iconColour": "orange"
  },
  "2ar": {
  "icon": "check",
  "type": "line",
  "foreground": "cyan",
  "iconColour": "cyan"
  }
  },
  "todo-tree.general.debug": true,
  "todo-tree.general.rootFolder": "${workspaceFolder}",
  "todo-tree.tree.showCountsInTree": true,
  "todo-tree.tree.scanMode": "workspace",
  "todo-tree.general.statusBar": "total",
  "todo-tree.general.statusBarClickBehaviour": "cycle",
  "todo-tree.tree.labelFormat": "${after}",
  "todo-tree.tree.showScanModeButton": true,

*/

//////////////////////////////////////////////////////////////
//     Ceux qui n'entraînent pas d'action nécessaire        //
//////////////////////////////////////////////////////////////

// Simple commentaire :
// !      Très important, danger, impératif
// @bug   Bug, défaillance sans gravité
//        (Arranger à l'occase)
// @n     À noter (Important)
// @i     Info, précision (Majeure)
// ***    Info
// @q ok  Question importante
// ? sdfs Question
// @f     Futur
// @s     Signal

// Dans Setting.json

/*

"better-comments.highlightPlainText": true,
"better-comments.tags":
[
  {
  "tag": "!",
  "color": "#FF0000",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@bug",
  "color": "#FF4901",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@n",
  "color": "#ffcf39",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@i",
  "color": "#0ff",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "***",
  "color": "#5eff00",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "?",
  "color": "#0000FF",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@f",
  "color": "#f0f",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@q",
  "color": "#ff0",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@s",
  "color": "#fff",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@dl",
  "color": "#7ff",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "/***",
  "color": "#7ff",
  "strikethrough": false,
  "backgroundColor": "transparent"
  },
  {
  "tag": "@v",
  "color": "#FF8C00",
  "strikethrough": false,
  "backgroundColor": "transparent"
  }
],

*/