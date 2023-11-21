const TesouroDireto = artifacts.require("TesouroDireto");

module.exports = function (deployer, network, accounts) {
    // Substitua 'TokenName' e 'TOKENSYMBOL' pelos valores desejados
    // e accounts[0] pelo endereço do proprietário, se necessário
    deployer.deploy(TesouroDireto, 'TesouroDiretoToken', 'TD2026', accounts[0]);
};