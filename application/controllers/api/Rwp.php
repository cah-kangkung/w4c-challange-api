<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Rwp extends RestController
{

   function __construct()
   {
      // Construct the parent class
      parent::__construct();
   }

   public function achievements_get()
   {
      // achievements from json file
      $achievements = json_decode(file_get_contents(FCPATH . 'database/json/achievements.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $achievements
      ], 200);
   }
   public function benefits_get()
   {
      // benefits from json file
      $benefits = json_decode(file_get_contents(FCPATH . 'database/json/benefits.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $benefits
      ], 200);
   }
   public function clients_get()
   {
      // clients from json file
      $clients = json_decode(file_get_contents(FCPATH . 'database/json/clients.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $clients
      ], 200);
   }
   public function facilities_get()
   {
      // facilities from json file
      $facilities = json_decode(file_get_contents(FCPATH . 'database/json/facilities.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $facilities
      ], 200);
   }
   public function flows_get()
   {
      // flows from json file
      $flows = json_decode(file_get_contents(FCPATH . 'database/json/flows.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $flows
      ], 200);
   }
   public function portfolios_get()
   {
      // portfolios from json file
      $portfolios = json_decode(file_get_contents(FCPATH . 'database/json/portfolios.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $portfolios
      ], 200);
   }
   public function recommendations_get()
   {
      // recommendations from json file
      $recommendations = json_decode(file_get_contents(FCPATH . 'database/json/recommendations.json'));

      $this->response($data = [
         "code" => '200',
         "response" => 'OK',
         "data" => $recommendations
      ], 200);
   }
}
