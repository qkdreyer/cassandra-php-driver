#include "php_cassandra.h"
#include "util/types.h"

zend_class_entry *cassandra_timestamp_gen_server_side_ce = NULL;

static zend_function_entry cassandra_timestamp_gen_server_side_methods[] = {
  PHP_FE_END
};

static zend_object_handlers cassandra_timestamp_gen_server_side_handlers;

static void
php_cassandra_timestamp_gen_server_side_free(php5to7_zend_object_free *object TSRMLS_DC)
{
  cassandra_timestamp_gen *self = PHP5TO7_ZEND_OBJECT_GET(timestamp_gen, object);

  cass_timestamp_gen_free(self->gen);

  zend_object_std_dtor(&self->zval TSRMLS_CC);
  PHP5TO7_MAYBE_EFREE(self);
}

static php5to7_zend_object
php_cassandra_timestamp_gen_server_side_new(zend_class_entry *ce TSRMLS_DC)
{
  cassandra_timestamp_gen *self = PHP5TO7_ZEND_OBJECT_ECALLOC(timestamp_gen, ce);

  self->gen = cass_timestamp_gen_server_side_new();

  PHP5TO7_ZEND_OBJECT_INIT_EX(timestamp_gen, timestamp_gen_server_side, self, ce);
}

void cassandra_define_TimestampGeneratorServerSide(TSRMLS_D)
{
  zend_class_entry ce;

  INIT_CLASS_ENTRY(ce, "Cassandra\\TimestampGenerator\\ServerSide", cassandra_timestamp_gen_server_side_methods);
  cassandra_timestamp_gen_server_side_ce = zend_register_internal_class(&ce TSRMLS_CC);
  zend_class_implements(cassandra_timestamp_gen_server_side_ce TSRMLS_CC, 1, cassandra_timestamp_gen_ce);
  cassandra_timestamp_gen_server_side_ce->ce_flags     |= PHP5TO7_ZEND_ACC_FINAL;
  cassandra_timestamp_gen_server_side_ce->create_object = php_cassandra_timestamp_gen_server_side_new;

  memcpy(&cassandra_timestamp_gen_server_side_handlers, zend_get_std_object_handlers(), sizeof(zend_object_handlers));
}
