module.exports = {
    publicPath: process.env.NODE_ENV === 'production'
        ? '/vue-app/dist/'
        : '/',
    devServer: {
        proxy: 'http://groom-room/yii-app/'
    }
}