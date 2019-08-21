<?php include "header.php";?>
<section class="section-header">
    <div class="section-header-top container">
        <h1>Viviane Imobiliária </h1>
        <p>Loren Ipsun</p>
    </div>
</section>
<section class="pesquisa-imoveis">
    <div class="container">
        <h2>Pesquisar imóveis</h2>
        <div class="pesquisa-imoveis-button">
            <div class="pequisa-imoveis-buttonb comprar active-pesquisa">Comprar</div>
            <div class="pequisa-imoveis-buttonb alugar">Alugar</div>
            <div class="pequisa-imoveis-buttonb lancamento">Lançamento</div>
        </div>
    </div>
    <form action="#" method="POST">
        <div class="busca-form container">
            <div class="cidades">
                <select>
                    <option value="Cidades">Cidades</option>
                </select>
            </div>    
            <div class="bairros">
                <select>
                    <option value="Cidades">Bairros</option>
                </select>
            </div>
            <div class="tipos">
                <select>
                    <option value="Cidades">Tipo de casa</option>
                </select>
            </div>
            <div class="qtd-quartos">
                <select>
                    <option value="Cidades">Quartos</option>
                </select>
            </div>
            <div class="valor">
                <input type="number" name="valormin" value="" Placeholder="Valor Min">
                <input type="number" name="valormax" value="" Placeholder="Valor Max">
            </div>
        </div>
        <div class="button-form">
            <input type="button" value="Buscar" />
        </div> 
    </form>
</section>
<section class="imoveis">
    <div class="container imoveis-title">
        <h2>Imóveis</h2>
    </div>
    <div class="container lista-imoveis">
        <ul>
            <li>
                <a href="#">
                    <div class="lista-imoveis-box">
                        <img src="img/apto.jpg" alt="" />
                        <div class="lista-imoveis-legend">
                            <p>Apartamento</p>
                            <span>Valor: R$ 250.000</span>
                        </div>
                    </div>
                </a>
            </li> 
            <li>
                <a href="#">
                    <div class="lista-imoveis-box">
                        <img src="img/apto.jpg" alt="" />
                        <div class="lista-imoveis-legend">
                            <p>Apartamento</p>
                            <span>Valor: R$ 250.000</span>
                        </div>
                    </div>
                </a>
            </li> 
            <li>
                <a href="#">
                    <div class="lista-imoveis-box">
                        <img src="img/apto.jpg" alt="" />
                        <div class="lista-imoveis-legend">
                            <p>Apartamento</p>
                            <span>Valor: R$ 250.000</span>
                        </div>
                    </div>
                </a>
            </li> 
            <li>
                <a href="#">
                    <div class="lista-imoveis-box">
                        <img src="img/apto.jpg" alt="" />
                        <div class="lista-imoveis-legend">
                            <p>Apartamento</p>
                            <span>Valor: R$ 250.000</span>
                        </div>
                    </div>
                </a>
            </li> 
            <li>
                <a href="#">
                    <div class="lista-imoveis-box">
                        <img src="img/apto.jpg" alt="" />
                        <div class="lista-imoveis-legend">
                            <p>Apartamento</p>
                            <span>Valor: R$ 250.000</span>
                        </div>
                    </div>
                </a>
            </li> 
            <li>
                <a href="#">
                    <div class="lista-imoveis-box">
                        <img src="img/apto.jpg" alt="" />
                        <div class="lista-imoveis-legend">
                            <p>Apartamento</p>
                            <span>Valor: R$ 250.000</span>
                        </div>
                    </div>
                </a>
            </li>            
        </ul>
    </div>
</section>
<section class="dados-imoveis">
    <div class="box-dados container">
        <div class="box-dados-uteis">
            <i class="fas fa-money-check-alt"></i>
            <p>Financiamento</p>
        </div>
        <div class="box-dados-uteis">
            <i class="fas fa-newspaper"></i>
            <p>Anuncie seu imóvel</p>
        </div>
        <div class="box-dados-uteis">
            <i class="fas fa-file-alt"></i>
            <p>Documentos e<br /> Downloads</p>
        </div>
    </div>
</section>
<?php include "footer.php";?>