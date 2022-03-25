.. include:: /Includes.rst.txt


.. _developer:

================
Developer corner
================

Target group: **Developers**, **Integrators**

.. contents:: Table of Contents
   :depth: 2
   :local:


Using the API
=============

The API can be used like described in the :ref:`schema manual
<ext_schema:api>`. But there is one detail: As the classes of this extensions
use a different namespace the instantiation of type models must reflect this::

   $floorPlan = new \Brotkrueml\SchemaPending\Model\Type\FloorPlan();

Alternatively, you can use the :php:`TypeFactory`, so you don't have to deal
with namespaces::

   $floorPlan = \Brotkrueml\Schema\Type\TypeFactory::createType('FloorPlan');


Using the view helpers
======================

The Fluid view helpers can be used like described in the :ref:`schema manual
<ext_schema:view-helpers>`:

.. code-block:: html

   <schema:type.floorPlan
      -id="https://example.org/#some-floor-plan"
      name="some floor plan"
   />

The Fluid namespace :html:`schema` is the same as for the core vocabulary.

