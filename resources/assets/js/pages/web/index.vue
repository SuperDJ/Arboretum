<template>
    <v-container fluid>
        <v-parallax :src="require('@/images/jumbotron.jpg')" height="600">
            <v-layout
                column
                align-center
                justify-center
                class="white--text"
            >
                <h1 class="white--text mb-2 display-1 text-xs-center">Arboretum Eenrum</h1>

                <v-btn
                    class="green lighten-2 mt-5"
                    dark
                    large
                    :to="{ name: 'login' }"
                >
                    Aanmelden
                </v-btn>
            </v-layout>
        </v-parallax>

        <section>
            <v-layout
                column
                wrap
                class="my-5"
                align-center
            >
                <v-flex xs12 sm4 class="my-3">
                    <div class="text-xs-center">
                        <h2 class="headline"><strong> Ontdek onze planten collectie </strong></h2>
                        <v-btn
                            class="green lighten-2 mt-5"
                            dark
                            large
                            :to="{ name: 'webPlantIndex' }"
                        >
                            Naar plantenoverzicht
                        </v-btn>
                        <span class="subheading">

                        </span>
                    </div>
                </v-flex>

                <v-flex xs12>
                    <v-container grid-list-xl>
                        <v-layout row wrap align-center>
                            <v-flex xs12 md4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="green--text text--lighten-2">local_florist</v-icon>
                                    </v-card-text>

                                    <v-card-title style="margin-left:2px" primary-title class="layout justify-center">
                                        <div class="headline">
                                            <strong>Wat is een Arboretum?</strong>
                                        </div>
                                    </v-card-title>

                                    <v-card-text>
                                        Een in bomen en struiken gespecialiseerde botanische tuin, in de 18e en 19e eeuw ontstaan om uitheems groen uit te proberen,
                                        met als doel het later in eigen land verder te verspreiden. Tegenwoordig is een arboretum behalve een verzameling groen ook vaak een
                                        centrum van wetenschappelijk onderzoek en voorlichting.
                                    </v-card-text>
                                </v-card>
                            </v-flex>

                            <v-flex xs12 md4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="green--text text--lighten-2">tag_faces</v-icon>
                                    </v-card-text>

                                    <v-card-title style="margin-left:2px" primary-title class="layout text-xs-center justify-center">
                                        <div class="headline">
                                            <strong>Het groene levenswerk van notaris Smit</strong>
                                        </div>
                                    </v-card-title>

                                    <v-card-text>
                                        Het <a href="//arboretumeenrum.nl/" target="_blank">arboretum Notoarestoen in Eenrum</a> bevat een internationale plantencollectie met
                                        de Japanse tempelboom, Chinese vaantjesboom, Amerikaanse Sequoia''s, rododendrons en nog veel meer.
                                        De tuin is het levenswerk van <a href="//arboretumeenrum.nl/notaris-smit/" target="_blank">notaris Smit</a> uit Eenrum, vandaar de naam
                                        "Notoarestoen": Gronings voor "tuin van de notaris".

                                        Notoarestoen is dagelijks vrij toegankelijk.
                                    </v-card-text>
                                </v-card>
                            </v-flex>

                            <v-flex xs12 md4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="green--text text--lighten-2">wb_sunny</v-icon>
                                    </v-card-text>

                                    <v-card-title style="margin-left:2px" primary-title class="layout justify-center">
                                        <div class="headline">
                                            <strong>Groene Inspiratie</strong>
                                        </div>
                                    </v-card-title>

                                    <v-card-text>
                                        250 informatiebordjes laten u met nieuwe ogen kijken naar de exotische variëteiten van de natuur. Met informatie over de historie en
                                        bijzonderheden van de rododendron, de sequoia en andere uitheemse soorten.

                                        Een klimaatexpositie inspireert tot groene keuzes en laat de effecten van de klimaatverandering zien. Het duurzame tuinhuis in
                                        Notoarestoen is voorzien van zonnepanelen en een milieuvriendelijk toiletsysteem.
                                    </v-card-text>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>

                    <v-container grid-list-xl>
                        <v-layout row wrap align-center>
                            <v-flex xs12 sm4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="green--text text--lighten-2">collections</v-icon>
                                    </v-card-text>

                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline">
                                            <strong>Planten collectie</strong>
                                        </div>
                                    </v-card-title>

                                    <v-card-text>
                                        <p>
                                            Voor een up-to-date overzicht van alle planten kunt u een kijkje nemen in het <router-link :to="{ name: 'webPlantIndex'}">plantenoverzicht</router-link>.
                                            Voor het gemak is ook mogelijk om een lijst van alle planten te printen.
                                            Op die manier weet u van te voren welke planten waar staan.
                                        </p>
                                    </v-card-text>
                                </v-card>
                            </v-flex>

                            <v-flex xs12 sm4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="green--text text--lighten-2">my_location</v-icon>
                                    </v-card-text>

                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline">
                                            <strong>Locatie</strong>
                                        </div>
                                    </v-card-title>

                                    <v-card-text>
                                        <p>
                                            Het is mogelijk om gebruik te maken van GPS van uw smartphone of tablet om uw locatie te vinden ten opzichte van een plant.
                                            Hiervoor kunt op vanuit het plantenoverzicht klikken op een specieke plant.
                                            Daarnaast kunt u via de <router-link :to="{ name: 'location' }">kaart</router-link> zien waar alle planten zich bevinden.
                                            Vanuit de kaart is het ook mogelijk om informatie van een specieke plant te krijgen.
                                        </p>
                                    </v-card-text>
                                </v-card>
                            </v-flex>

                            <v-flex xs12 sm4>
                                <v-card class="elevation-0 transparent">
                                    <v-card-text class="text-xs-center">
                                        <v-icon x-large class="green--text text--lighten-2">wallpaper</v-icon>
                                    </v-card-text>

                                    <v-card-title primary-title class="layout justify-center">
                                        <div class="headline">
                                            <strong>QR-code</strong>
                                        </div>
                                    </v-card-title>

                                    <v-card-text>
                                        <p>
                                            Mocht de GPS-locatie niet werken dan zijn er op een aantal informatiebordjes zogenoemde QR-codes te vinden.
                                            Deze code's kunt u scannen met een QR-code scanner app op een smartphone of tablet.
                                            Wanneer de QR-code gescand is, is het mogelijk om meer informatie te krijgen van die specifieke plant.
                                        </p>
                                    </v-card-text>
                                </v-card>
                            </v-flex>
                        </v-layout>
                    </v-container>
                </v-flex>
            </v-layout>
        </section>

        <section>
            <v-jumbotron :src="require('@/images/notaris_smit.jpg')" />
        </section>

        <section>
            <v-container grid-list-xl>
                <v-layout row wrap justify-center class="my-5">
                    <v-flex xs12 sm4>
                        <v-card class="elevation-0 transparent">
                            <v-card-title primary-title class="layout">
                                <div class="headline" style="margin-left:12px">
                                    <strong>Dagelijks geopend</strong>
                                </div>
                            </v-card-title>

                            <v-card-text>
                                <p>
                                    Notoarestoen is gevestigd aan het Ernstheemsterpad in Eenrum.
                                </p>

                                <p>
                                <strong> Met de auto </strong> <br/>
                                Komende vanuit Winsum, Mensingeweer, in Eenrum 2e straat rechts (Spoorlaan).
                                Aan het eind van de Spoorlaan bevindt zich aan uw rechterhand het arboretum.
                                </p>
                                <strong> Met het openbaar vervoer </strong> <br/>
                                Vanaf Groningen de trein naar Winsum. Vanaf Winsum bus 65 naar Zoutkamp.
                                Uitstappen bij halte De Vennen in Eenrum. Daarna is het nog enkele minuten lopen.
                            </v-card-text>
                        </v-card>
                    </v-flex>

                    <v-flex xs12 sm4 offset-sm1>
                        <v-card class="elevation-0 transparent">
                            <v-card-text>
                                <div style="width: 100%">
                                    <iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=300&amp;hl=en&amp;coord=53.361222, 6.465152&amp;q=Ernstheemsterpad%2C%209967%20PJ%20Eenrum%2C%20Nederland+(Arboretum%20Eenrum)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </section>

        <v-footer color="primary">
            <v-layout row wrap align-center>
                <v-flex xs12>
                    <div class="white--text ml-3">
                        <router-link style="color:#fff" :to="{ name: 'about'}">Over deze website</router-link>.
                    </div>
                </v-flex>
            </v-layout>
        </v-footer>
    </v-container>
</template>

<script>
	export default {
		metaInfo: {
			title: 'Home'
		},
	}
</script>
