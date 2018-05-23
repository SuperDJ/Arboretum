import Vue from 'vue';
import Vuetify from 'vuetify';
import { store } from './store/store';
import router from './router';
import Meta from 'vue-meta';
import VueProgressiveImage from 'vue-progressive-image';
//import * as VueGoogleMaps from 'vue2-google-maps';

Vue.use( Meta );
Vue.use( Vuetify );
Vue.use( VueProgressiveImage );

/*
if( google.length > 0 )
{
	Vue.use( VueGoogleMaps, {
		load: {
			key: google,
		}
	} );
} else {
	console.error('No Google developer token');
} */

//Vue.component( 'c-image', () => import( '@/components/Image' ) );

const token = document.head.querySelector( 'meta[name="csrf-token"]' ).getAttribute( 'content' );

if( token )
{
	window.token = token;
} else {
	console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

import App from '@/pages/App';

new Vue({
	el: '#app',
	store,
	router,
	render: h => h( App )
});
