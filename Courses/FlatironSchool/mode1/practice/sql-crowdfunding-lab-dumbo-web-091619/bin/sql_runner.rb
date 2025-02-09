require_relative 'environment'

class SQLRunner
  def initialize(db)
    @db = db
  end

  def execute_create_sql
    sql = File.read('lib/create.sql')
    @db.execute_batch(sql)
  end

  def execute_insert_sql
    sql = File.read('lib/insert.sql')
    @db.execute_batch(sql)
  end

  def execute_data
    sql = File.read('lib/data.sql')
    @db.execute_batch(sql)
  end

  def execute_sample_sql
    sql = File.read('/Users/flatironbrooklyn/Development/code/mode1/practice/sql-crowdfunding-lab-dumbo-web-091619/db/lab_database.db')
    @db.execute_batch(sql)
  end
end

