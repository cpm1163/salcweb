Relacionamento Polimôrfico

# laravel new salcweb --jet
# cd salcweb
# npm install && npm run dev
#
echo "# salcweb" >> README.md
# git init
# git add README.md
# git commit -m "first commit"
# git branch -M main
# git remote add origin https://github.com/cpm1163/salcweb.git
# git push -u origin main
# php artisan migrate
# git add .
# git commit -m "criação das migrações"
# git push
Criar a chave do app
# php artisan key:generate


Feitos os ajustes de locale, timezone, .env, criado o banco de dados.
# php artisan migrate

Acerto no tail tailwind.config.js, font-family, necessário rodar o run dev
# npm run dev

Criar os modelos
$ php artisan make:model Product -m
$ php artisan make:model Manufacturer -m

Tabela products
    $table->string('name')->unique();
    $table->string('brand')->nullable();
    $table->string('description')->nullable();
    $table->string('slug')->nullable();
    $table->string('image_cover')->nullable();
    $table->string('image_thumbnail')->nullable();
    $table->double('price', 10,2)->default('0.01');
    $table->boolean('active')->default('1');

Tabela manufacturers
    $table->string('name')->unique();
    $table->string('cpf_cnpj')->nullable();
    $table->string('description')->nullable();
    $table->string('contact')->nullable();
    $table->string('tel1')->nullable();
    $table->string('tel2')->nullable();
    $table->string('email1')->nullable();
    $table->string('email2')->nullable();

    $table->unsignedBigInteger('product_id');
    $table->foreign('product_id')->references('id')->on('products');

criar um componente livewire para menu responsivo com tailwind:
primeiro criar o componente livewire (php artisan make:livewire navigation). É criado em resources\views\livewire\navigation.blade.php. Este comando cria a class em app\Http\Livewire\Navigation.php.
# php artisan make:livewire navigation

git add .
git commit -m "Criação migração products+manufacturer"
git push

Cria o UsersTable livewire
# php artisan make:livewire UsersTable

[32;1mCLASS:[39;22m app/Http/Livewire/UsersTable.php
[32;1mVIEW:[39;22m  C:\xampp\htdocs\salcweb\resources\views/livewire/users-table.blade.php
Abrir os arquivos UsersTable.php e users-table.blade.php

# php artisan make:controller UserController


Products



$ php artisan make:model Stock -m
$ php artisan make:model Stock_moved -m



dica usertable git https://github.com/davidgrzyb/laravel-livewire-datatable-example/blob/master/resources/views/users/index.blade.php



Dica: Se tiver na propriedade o valor do pai, você pode passar parâmetros:
@livewire('view-pai', ['valor' => $item->nomeRelacaoPai])

Obs.: Imagem do logo menu w149xh32 resolu��o 90

criar um componente livewire para menu responsivo com tailwind:
primeiro criar o componente livewire (php artisan make:livewire navigation). É criado em resources\views\livewire\navigation.blade.php. Este comando cria a class em app\Http\Livewire\Navigation.php.
# php artisan make:livewire navigation
responder "no"
Onde chamar um componente livewire? view/layouts/app.blade.php

Copiado o componente de menu do site tailwindCSS, para resources\views\livewire\navigation.blade.php, feita as alterações
Menu alpine, consiste uma div em componente acrescentando x-data="{ open:false }" criando uma variavel e atribuindo um valor (false)

<nav class="bg-gray-800" x-data="{ open: false }">

<!-- Mobile menu button-->
<button x-on:click="open = true" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">

<!-- Menu do perfil profile dropdown -->
<div class="ml-3 relative" x-data="{ open: false }">

<!-- botao que mostra a imagem do avatar -->
<button x-on:click="open = true" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">

<!-- opções profile dropdown -->
<div x-show="open" x-on:click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">

componente do blade app\View\Components\AppLayout.php renderiza e chama o resources\views\layouts\app.blade.php
na view welcome deixa só a chamada do componente

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

Para permitir somente para usuarios autenticados, use a diretiva @auth
    @auth
        só autenticado
    @else
        não autenticado
    @endauth

logout tem que usar um formulário

Criação das model e migration
$ php artisan make:model Product -m
$ php artisan make:model Store -m
$ php artisan make:model Stock -m
$ php artisan make:model Category -m
$ php artisan make:model Order -m
$ php artisan make:model Status -m
$ php artisan make:migration create_category_has_product_table
$ php artisan make:migration create_order_has_product_table
php artisan make:migration create_order_has_status_order_table

# php artisan migrate
# php artisan migrate:rollback  (Este comando apaga a tabela do banco)
# php artisan migrate

Ajustes nas migrações
Atenção, tabela products campo active, aceita 0 ou 1

Habilitando fotos do perfil
Se você deseja permitir que os usuários carreguem fotos de perfil personalizadas, você deve habilitar o recurso no config/jetstream.phparquivo de configuração do seu aplicativo . Para habilitar o recurso, simplesmente descomente a entrada do recurso correspondente do featuresitem de configuração dentro deste arquivo

'features' => [
    Features::profilePhotos(),
    Features::api(),
    Features::teams(),
],

Depois de habilitar o recurso de foto de perfil, você deve executar o storage:link

# php artisan storage:link

Criar a modelo e migração do panorama
# php artisan make:model Company -m
# php artisan make:model Bid -m
# php artisan make:model Bid_items -m
# php artisan make:model Edict -m
# php artisan make:model Edict_rules -m


Acerto da migration
    BID_ITEMS
    $table->id();
    $table->string('item');
    $table->string('position');
    $table->string('rank');
    $table->string('type_company');
    $table->string('company');
    $table->string('brand');
    $table->string('manufacturer');
    $table->string('situation');
    $table->double('offer', 10,2);
    $table->boolean('demais_5p');

    $table->unsignedBigInteger('bid_id');
    $table->foreign('bid_id')->references('id')->on('bids')->onDelete('cascade');

obs.: ON DELETE CASCADEsignifica que, se o registro pai for excluído, qualquer registro filho também será excluído.

    BIDS
    $table->id();
    $table->string('number');
    $table->string('uasg');
    $table->string('uasg_name');



Push no git 
# git add .
# git commit -m "criação tabelas panorama"
# git push

Criar seed factory
# php artisan make:factory BidFactory --model=Bid
# php artisan make:seed BidSeed
# php artisan db:seed




Relacionamento 1-n, um para muitos Exemplo: users x tweet, onde um tweet pertence a um
usuario, um usuario tem 1 ou varios tweet


Criar o controller e a view livewire do Bid
# php artisan make:livewire showBids
# php artisan make:livewire ShowBiditems

Criar a action do relacionamento bid x itens

No model do Bid, criar a action:
public function bid_items()
{
    return $this->hasMany(Bid_items::class);
}

No model bid_items criar a action:
public function bid()
{
    return $this->belongsTo(bid::class);
}

Recuperar a informação para passar os dados para view

Insere bids
INSERT INTO `bids` (`id`, `number`, `uasg`, `uasg_name`, `created_at`, `updated_at`) VALUES (NULL, '332020', '160249', 'ACADEMIA MILITAR DAS AGULHAS NEGRAS/RJ', '2020-10-12 15:11:38', '2020-10-12 15:11:38');

INSERT INTO `bids` (`id`, `number`, `uasg`, `uasg_name`, `created_at`, `updated_at`) VALUES (NULL, '62020', '160292', 'COLEGIO MILITAR DO RIO DE JANEIRO/RJ', '2020-11-25 15:11:38', '2020-11-25 15:11:38');

INSERT INTO `bids` (`id`, `number`, `uasg`, `uasg_name`, `created_at`, `updated_at`) VALUES (NULL, '42021', '160495', 'HOSPITAL MILITAR DE ÁREA DE SÃO PAULO', '2020-12-20 15:11:38', '2020-12-20 15:11:38');

INSERT INTO `bids` (`id`, `number`, `uasg`, `uasg_name`, `created_at`, `updated_at`) VALUES (NULL, '22021', '160036', 'COMANDO 6 REGIAO MILITAR', '2021-01-14 10:11:38', '2021-01-14 10:11:38');

INSERT INTO `bids` (`id`, `number`, `uasg`, `uasg_name`, `created_at`, `updated_at`) VALUES (NULL, '312020', '120623', 'BASE AéREA DOS AFONSOS', '2021-03-10 12:11:38', '2021-03-10 12:11:38');


INSERT INTO `bid_items` (`id`, `item`, `position`, `rank`, `type_company`, `company`, `brand`, `manufacturer`, `situation`, `offer`, `demais_5p`, `bid_id`, `created_at`, `updated_at`) VALUES (NULL, '5', '5', '6', 'me-epp', 'areia branca', 'biscoito', 'balduco', 'aceito', '12.34', '0', '2', NULL, NULL);

latest()
mensagem no controller
session()->flash('message', 'executado com sucesso');
mostrar na view
@if(session()->has('message'))
    {{ session('message') }}
@endif

$bids = Bid::latest()->paginate();
Na view
<a href="javascript:void(0) wire:click=editForm({{ $ad->id }})">Edit</a>
No controller
public function editForm($id)
{

}


        $bids = Bid::latest()->paginate();
        return view('livewire.show-bids', [
            'bids' => $bids,
            ]);




<div class="container mx-auto px-2">
    <!-- component -->
    <div class="py-8">
        <div>
            <h1 class="text-2xl font-semibold leading-tight">Panorama</h1>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="border-collapse min-w-full leading-normal stripe hover">
                    <!-- Cabeçalho-->
                    <thead>
                        <tr>
                            <th
                                class="px-1 py-3 border-b-2 border-gray-200 bg-gray-100 text-center font-semibold text-gray-600 uppercase tracking-wider text-base hidden">
                                Código
                            </th>
                            <th
                                class="px-1 py-3 border-b-2 border-gray-200 bg-gray-100 text-center font-semibold text-gray-600 uppercase tracking-wider text-base">
                                Pregão
                            </th>
                            <th
                                class="px-1 py-3 border-b-2 border-gray-200 bg-gray-100 text-center font-semibold text-gray-600 uppercase tracking-wider text-base">
                                UASG
                            </th>
                            <th
                                class="px-1 py-3 border-b-2 border-gray-200 bg-gray-100 text-center font-semibold text-gray-600 uppercase tracking-wider text-base hidden lg:block">
                                Nome UASG
                            </th>
                            <th
                                class="px-1 py-3 border-b-2 border-gray-200 bg-gray-100 text-center font-semibold text-gray-600 uppercase tracking-wider text-base">
                                Dt. Atual.
                            </th>
                            <th
                                class="px-1 py-3 border-b-2 border-gray-200 bg-gray-100 text-center font-semibold text-gray-600 uppercase tracking-wider text-base">
                                Ação
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bids as $bid)
                            <tr class="border-b border-gray-300 bg-gray-50 hover:bg-gray-200" >
                                <td class="text-center py-2 text-base lowercase hidden">
                                    {{ $bid->id }}
                                </td>
                                <td class="text-center py-2 text-base lowercase">
                                    {{ $bid->number }}
                                </td>
                                <td class="text-center py-2 text-base lowercase">
                                    {{ $bid->uasg }}
                                </td>
                                <td class="text-center py-4 text-xs uppercase hidden lg:block">
                                    {{ $bid->uasg_name }}
                                </td>
                                <td class="text-center py-2 text-base lowercase">
                                    {{ date( 'd/m/Y' , strtotime($bid->created_at))}}
                                </td>
                                <td class="text-center text-base">
                                    <a href="{{ route('panorama') }}"><button class="border-2 border-purple-500 hover:border-white hover:text-purple-600 p-1 m-1 rounded-lg">Listar</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $bids->links() }}
            </div>
        </div>
    </div>
</div>
<div>
    <livewire:ShowBids/>

</div>


Route::get('panorama', ShowBids::class)->name('panorama');
