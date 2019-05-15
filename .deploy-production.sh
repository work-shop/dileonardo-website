#!/bin/bash

#npm run build

source ./.env

# Uploads
#scp -P $KINSTA_PORT -r wp-content/uploads $KINSTA_USER@$KINSTA_IP:./public/wp-content/

# Theme
#scp -P $KINSTA_PRODUCTION_PORT -r wp-content/themes/dileonardo $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/themes

# Bundles only
#scp -P $KINSTA_PRODUCTION_PORT -r wp-content/themes/custom/bundles $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/themes/custom

# Plugins and must use plugins
#scp -P $KINSTA_PRODUCTION_PORT -r wp-content/plugins $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/
#scp -P $KINSTA_PRODUCTION_PORT -r wp-content/mu-plugins $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/

#specific plugins
#scp -P $KINSTA_PRODUCTION_PORT -r wp-content/plugins/wc-product-customer-list-premium $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/plugins

#specific files
#scp -P $KINSTA_PRODUCTION_PORT wp-content/themes/custom/functions/post-types/classes/class-nam-class.php $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/themes/custom/functions/post-types/classes/

#functions.php
#scp -P $KINSTA_PRODUCTION_PORT wp-content/themes/custom/functions.php $KINSTA_PRODUCTION_USER@$KINSTA_PRODUCTION_IP:./public/wp-content/themes/custom/

#curl -L $PRODUCTION_SITE_URL/kinsta-clear-cache-all/



#GODADDY DEPLOYMENT

# Site Theme
scp -r wp-content/themes/dileonardo $GODADDY_PRODUCTION_USER@$GODADDY_PRODUCTION_IP:./html/wp-content/themes

# Bundles only
#scp -r wp-content/themes/dileonardo/bundles $GODADDY_PRODUCTION_USER@$GODADDY_PRODUCTION_IP:./html/wp-content/themes/dileonardo

# Specific files
#scp -r wp-content/themes/dileonardo/partials/projects/grid.php $GODADDY_PRODUCTION_USER@$GODADDY_PRODUCTION_IP:./html/wp-content/themes/dileonardo/partials/projects/


