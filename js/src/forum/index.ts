import app from 'flarum/forum/app';

export { default as extend } from './extend';

app.initializers.add('dashzeveg-custom-head', () => {
  console.log('[dashzeveg/flarum-custom-head] Hello, forum!');
});
