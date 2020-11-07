<template>
<div>
    <div class="container-md pt-5">
        <div class="text-center">
            <h1>Qual é a sua Dúvida?</h1>
        </div>
    </div>
    <!-- input de busca de perguntas -->
    <div class="container">
        <form id="">
            <div class="container">
                <div class="input-group">
                    <input v-model="pesqusiar" class="form-control form-control-lg shadow-none text-center" type="text" placeholder="Digite aqui a sua dúvida (exemplo: Como recuperar meu usuário?)">
                    <div class="input-group-append">
                        <i class="fas fa-search fa-2x input-group-text badge-dark"></i>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Card de resultado de busca -->
    <div class="container-md pt-4">
        <transition name="fade">
            <!-- O busca começa quando digitar a partir de 4 letras -->
            <div v-if="showCardResultado" class='card' id="card-central-resultado-busca">
                <div class='card-header badge-warning'>
                    <h4 class="text-white"><i class='fas fa-redo-alt'></i> Resultado da Busca</h4>
                </div>
                <load></load>
                <!-- Construindo resultado conforme existirem no banco de dados -->
                <div v-if="showResultado" class='card-body' id='card-body-perguntas-resultado'>
                    <div class="accordion" id="perguntaResposta">
                        <!-- percorrendo objeto com a diretiva v-for e apresentando  -->
                        <div class='card m-2 border-0' v-for="response in resultadoPergunta" :key="response.id">
                            <div class="card-header p-0 border-0 mb-2" id="card + response.id">
                                <button class='btn btn-block btn-outline-dark btn-lg border-0 text-left shadow-none' id="card-button" data-toggle='collapse' :data-target="'#' + response.sistema + response.id + response.sistema_id" aria-expanded='false' :aria-controls="response.sistema + response.id + response.sistema_id" @click="frequenciaPergunta(response.id)">
                                    {{response.pergunta}}
                                </button>
                            </div>
                            <div :id="response.sistema + response.id + response.sistema_id" class='collapse' :aria-labelledby="response.sistema + response.id" data-parent='#perguntaResposta'>
                                <div class='card-body card-body border rounded text-md-left'>
                                    <pre>{{ response.resposta}}</pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </transition>
    </div>
    <div class="pt-5 m-md-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card border-0 m-2">
                    <h5 class="card-title p-3 badge-warning text-center">Perguntas Recentes</h5>
                    <div class="card-body">
                        <load></load>
                        <div class="accordion" id="perguntaResposta">
                            <div class="card m-2 border-0" v-for="item in listarPerguntas" :key="item.id">
                                <div class="card-header p-0 border-0 mb-2" :id="item.sistema + item.id">
                                    <button class="btn btn-block btn-outline-dark btn-lg border-0 text-left shadow-none" type="button" data-toggle="collapse" :data-target="'#' + item.sistema + item.id + item.sistema" aria-expanded="true" :aria-controls="item.sistema + item.id + item.sistema">
                                        {{item.pergunta}}
                                    </button>
                                </div>
                                <div :id="item.sistema + item.id + item.sistema" class="collapse " :aria-labelledby="item.sistema + item.id" data-parent="#perguntaResposta">
                                    <div class="card-body border rounded text-md-left">
                                        <pre>{{item.resposta}}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 m-2">
                    <h5 class="card-title p-3 badge-warning text-center">Codigos Recentes</h5>
                    <div class="card-body">
                        <load></load>
                        <div class="accordion" id="perguntaResposta">
                            <div class="card m-2 border-0" v-for="item in listarCodigos" :key="item.id">
                                <div class="card-header p-0 border-0 mb-2" :id="item.sistema + item.codigo">
                                    <button class="btn btn-block btn-outline-dark btn-lg border-0 text-left shadow-none" type="button" data-toggle="collapse" :data-target="'#' + item.sistema + item.codigo + item.sistema" aria-expanded="true" :aria-controls="item.sistema + item.codigo + item.sistema">
                                        {{item.codigo}}
                                    </button>
                                </div>
                                <div :id="item.sistema + item.codigo + item.sistema" class="collapse " :aria-labelledby="item.sistema + item.codigo" data-parent="#perguntaResposta">
                                    <div class="card-body border rounded p-1">
                                        <div class="card-header badge-info">
                                            Descrição - Erro {{item.codigo}}
                                        </div>
                                        <div class="p-4">
                                            {{item.descricao}}
                                        </div>
                                        <div class="card-header badge-info">
                                            Solução
                                        </div>
                                        <div class="p-4">
                                            {{item.solucao}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {

    created() {
        this.listarRecentes();
    },

    computed: {
        resultadoPergunta() {
            return this.resultado
        },

        listarPerguntas() {
            return this.perguntas;
        },

        listarCodigos() {
            return this.codigos;
        }
    },

    data() {
        return {
            /**
             * atributo de controle frequencia
             */
            value: null,
            /**
             *Atributos de pesquisar pergunta
             */
            pesqusiar: '',
            resultado: [],

            /**
             *Atributos perguntas e codigos recentes
             */
            perguntas: [],
            codigos: [],

            /**
             *Atributos shows para exibir conforme as etapas
             */
            showResultado: false,
            showCardResultado: false
        }
    },

    watch: {
        /**
         *  Método da váriavel Pesquisar a cada novo valor
         */
        pesqusiar(value) {
            this.showCardResultado = true
            if (value.length >= 4) {
                this.pesqusiarPergunta(value)
            } else
            if (value.length == 0) {
                this.showCardResultado = false
            }
        }
    },

    methods: {

        /**
         * Listando todos os recentes
         */
        listarRecentes: async function () {
            this.eventLoad(true)
            try {
                const response = await axios({
                    method: 'post',
                    url: '/listarRecentesHome',
                })
                console.log(response.data)
                this.perguntas = response.data.perguntas;
                this.codigos = response.data.codigos;
            } catch (error) {
                console.log('Erro ao listar as perguntas e codigo de erros recentes.')
            } finally {
                this.eventLoad(false)
            }
        },

        /**
         * Pesquisar Pergunta
         */
        pesqusiarPergunta: async function (value) {
            this.eventLoad(true)
            try {
                const response = await axios({
                    method: 'post',
                    url: '/pesquisarPergunta',
                    data: {
                        'pergunta': value
                    }
                })
                console.log(response.data)
                this.showResultado = true;
                this.resultado = response.data
            } catch (error) {
                // console.log(error.response)
            } finally {
                this.eventLoad(false)
            }
        },

        /**
         *Evento para mostra uma tela de carregamento enquanto é retornado a consulta
         */
        eventLoad(active) {
            this.$root.$emit('load', active);
        },

        /**
         * Recentes/frequencia do card caso for clicado para ler a resposta
         */
        frequenciaPergunta: async function (id) {
            if (id != this.value) {
                this.value = id
                try {
                    const response = await axios({
                        method: 'post',
                        url: '/frequenciaPergunta/' + id
                    })
                    // console.log(response.data)
                } catch (error) {
                    console.log('Erro ao tentar salvar frequencia.')
                }
            } else {
                this.value = null;
            }
        },
    }
}
</script>
