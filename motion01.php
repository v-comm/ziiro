<html>
    <!-- header -->
    <?php include('header.php'); ?>

    <!-- content -->
    <body>
        <form>
            <section class="hero is-light is-bold">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="subtitle is-5">Etapa 01/02</h1>
                        <h1 class="title is-1 fine">Configure seu anúncio</h1>

                        <!-- etapa 01 -->
                        <div class="columns">
                            <div class="column">
                                <video src="http://site.vcomm.com.br/arts/motion/01.mp4" controls muted autoplay loop></video>
                            </div>
                            <div class="column">
                                <input type="text" value="motion 01" hidden>
                                <label class="label">Chamada 01</label>
                                <textarea class="textarea" rows="2" required></textarea>
                                <p>&nbsp;</p>
                                <label class="label">Chamada 02</label>
                                <textarea class="textarea" rows="2" required></textarea>
                                <p>&nbsp;</p>
                                <label class="label">Sua Logo</label>
                                <small class="info">OBS: PNG sem fundo.</small>
                                <div class="box">
                                    <input type="file" name="image1" required>
                                </div>

                                <div class="columns">
                                    <div class="column">
                                        <label class="label">Fotografia 01</label>
                                        <div class="box">
                                            <input type="file" name="image1" required>
                                        </div>
                                    </div>

                                    <div class="column">
                                        <label class="label">Fotografia 02</label>
                                        <div class="box">
                                            <input type="file" name="image1" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label class="label">Quando o cliente clicar no anúncio, enviar ele para:</label>
                        <small class="info">Se for WhatsApp, por favor insira o número</small>
                        <input class="input" required>
                        <p>&nbsp;</p>

                        <a class="button is-color" href="#pagamento">Pronto. Configurei meu anúncio.</a>
                    </div>
                </div>
            </section>

            <section class="hero is-fullheight bg5 wow animated fadeIn" id="pagamento">
                <div class="hero-body">
                    <div class="container">
                        <h1 class="subtitle is-5 color3">Etapa 02/02</h1>
                        <h1 class="title is-1 fine color2">Seus dados</h1>

                        <div class="columns">
                            <div class="column">
                                <label class="label">Empresa</label>
                                <input type="text" class="input" required>
                                <p>&nbsp;</p>
                                <label class="label">E-Mail</label>
                                <input type="text" class="input" required>
                                <p>&nbsp;</p>
                            </div>

                            <div class="column">
                                <label class="label">Representante da Empresa</label>
                                <input type="text" class="input" required>
                                <p>&nbsp;</p>
                                <label class="label">Telefone de Contato</label>
                                <input type="text" class="input" required>
                                <p>&nbsp;</p>
                            </div>
                        </div>

                        <button class="button is-color" type="submit">Anunciar!</button>
                    </div>
                </div>
            </section>
        </form>
    </body>
</html>