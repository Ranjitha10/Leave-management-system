  use strict;
  use DBI;
   use XML::Generator::DBI;
   use XML::Handler::YAWriter;

   my $dbh = DBI->connect ("DBI:mysql:counsellor",
                           "root", "",
                           { RaiseError => 1, PrintError => 0});
   my $out = XML::Handler::YAWriter->new (AsFile => "-");
   my $gen = XML::Generator::DBI->new (
                                   Handler => $out,
                                   dbh => $dbh
                               );
   $gen->execute ("SELECT  * FROM counsellor.fee");
   $dbh->disconnect ();