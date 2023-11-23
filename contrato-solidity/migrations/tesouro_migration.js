const TesouroDireto = artifacts.require("TesouroDireto");

module.exports = function (deployer) {
    deployer.deploy(TesouroDireto);
};