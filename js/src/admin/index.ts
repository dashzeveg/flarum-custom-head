import app from 'flarum/admin/app';

app.initializers.add('dashzeveg-custom-head', () => {
  app.registry
    .for('dashzeveg-custom-head')
    .registerSetting({
      setting: 'dashzeveg-custom-head.custom_head_html',
      type: 'textarea',
      label: app.translator.trans('dashzeveg-custom-head.admin.custom_head_label'),
      help: app.translator.trans('dashzeveg-custom-head.admin.custom_head_help'),
    });
});