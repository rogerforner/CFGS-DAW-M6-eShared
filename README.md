## Instal·lació
### Clonar el repositori

```
$ git clone git@github.com:rogerforner/WebsAlPunt_eShared.git
```

### Instal·lar dependències

```
$ composer install
$ npm install
```

## Configuració
### .env

Copiem el fitxer *.env.example* i, a la còpia, li posem el nom *.env*.

Desprès hem de configurar la connexió a la base de dades:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=EL_NOM_DE_LA_BASE_DE_DADES
DB_USERNAME=USUARI_PER_ACCEDIR_A_LA_DB
DB_PASSWORD=CLAU_USUARI
```

Per exemple:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eshared
DB_USERNAME=daw
DB_PASSWORD=institutMontsia
```

### Migracions
Ara executarem la següent comanda en el terminal per tal de crear les taules a la
base de dades:

```
$ php artisan migrate
```

### Autenticació
*Si tenim problemes a l'hora d'accedir amb usuaris;*
Executarem la següent comanda en el terminal per tal de que es pugui dur endavant
l'autenticació dels usuaris:

```
$ php artisan make:auth
```

### Generar clau de l'Alpicació

```
$ php artisan key:generate
```

## Treballant amb Laravel
### Compilant les vistes
En una instal·lació des de zero, desprès de dur a terme l'autenticació, ens podem
trobar amb que les pàgines d'*inici de sessió* i de *registre* no funcionin.

Això es deu a que s'han de compilar els fitxers de la vista (.blade.php), situats
en el directori */resources/views*. Un cop compilats s'afegiran en el directori
que és emprat per visualitzar a web */public*:

```
$ php artisan serve
```

Un cop executat el servidor de *artisan* obtindrem una URL en la que navegar a
través de la nostra aplicació web.

```
$ php artisan serve
Laravel development server started: <http://127.0.0.1:8000>
```

*És interessant no tancar aquest mentre es treballi amb les vistes.*

### Laravel Mix (assets)

Nosaltres treballarem amb */resources/assets* i necessitem que els fitxers siguin
afegits, de la mateixa manera que les vistes, a */public*. A més a més hem de
tenir en compte que els SASS es tenen que compilar.

Ens hem d'assegurar de tenir instal·lat node:

```
$ curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -
$ sudo apt-get install -y nodejs
```

Tot seguit instal·lem totes les dependèncie. Podem veure aquestes en *package.json*.

```
$ npm install
```

Si tenim node instal·Lat emprarem la següent comanda per tal de compilar el que
hi hagi a *assets* i enviar-ho, de forma automàtca, a */public*:

```
$ npm run dev
```

Si ens volem estaviar el tenir que executar a comanda *npm run dev* cada cop que
treballem amb algun fitxer dels assets, també la podem executar i deixar que
funcioni per si sola (vigilarà els canvis):

```
$ npm run watch
```
