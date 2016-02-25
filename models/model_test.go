package models
import (
	"testing"
	"fmt"
)

func TestDB_GORM(t *testing.T) {
	db := NewDB("postgres", "user=sign password=sign dbname=sign sslmode=disable")
//	db.DropTable(&Content{})
	db.CreateTable(&Content{})
	fmt.Println("Create Tabel success!")
	contents := Setup()
	c := contents[0]
	if db.NewRecord(c) {
		fmt.Println("New Record!")
	}
//	db.Create(&c)
//	fmt.Println("Create Record success!")

}
