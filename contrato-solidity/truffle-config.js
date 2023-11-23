require('dotenv').config();
const HDWalletProvider = require('@truffle/hdwallet-provider');

module.exports = {
  networks: {
    /*development: {
      host: "127.0.0.1", // Localhost
      port: 8545,        // Porta padrão do Ganache - Ganache-Cli 8545
      network_id: "*",   // Qualquer ID de rede
    },
    */
    bsctest: {
      provider: new HDWalletProvider({
        mnemonic: {
          phrase: process.env.MNEMONIC
        },
        providerOrUrl: "https://data-seed-prebsc-1-s3.binance.org:8545/",
      }),
      network_id: "97"
    }
},
  compilers: {
    solc: {
      version: "^0.8.17",
      settings: {
        optimizer: {
          enabled: true, // Default: false
          runs: 200      // Default: 200
        },
      }
    }
  }
};
