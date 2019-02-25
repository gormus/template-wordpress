#!/usr/bin/env bash

if [ ! -f "~/.bashrc" ]; then
  cp -v $LANDO_MOUNT/.lando/.bashrc ~/.bashrc
fi

if [ ! -f "$LANDO_MOUNT/.env" ]; then
  cp -v $LANDO_MOUNT/.lando/example.env $LANDO_MOUNT/.env
fi

if [ ! -f "$LANDO_MOUNT/web/wp-config-local.php" ]; then
  cp -v $LANDO_MOUNT/.lando/example.wp-config-local.php $LANDO_MOUNT/web/wp-config-local.php
fi
